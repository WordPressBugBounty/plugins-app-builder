<?php
/**
 * WooCommerce Brands Integration.
 *
 * @package AppBuilder\Integration
 */

namespace AppBuilder\Di\Service\Integration;

defined('ABSPATH') || exit;

use WP_REST_Server;
use WC_Coupon;
use Coupon_Referral_Program_Public;
use Coupon_Referral_Program_Admin;

/**
 * Class CouponReferralWooIntergration
 */
class CouponReferralWooIntegration implements IntegrationInterface
{
	use IntegrationTraits;

	/**
	 * Integrations infomation.
	 *
	 * @var string $identifier infomation.
	 */
	public static $infomation = array(
		'identifier' => 'CouponReferralWoo',
		'title' => 'Coupon Referral Program for WooCommerce',
		'description' => 'Atrae a los clientes y recompénsalos con un Coupon Referral Program.',
		'icon' => 'https://woocommerce.com/wp-content/uploads/2019/02/coupon-referal.jpg',
		'url' => 'https://woocommerce.com/es/products/coupon-referral-program/',
		'author' => 'WP Swings',
		'documentation' => 'https://appcheap.io/docs/cirilla-developers-docs/integrations/coupon-referral-program-for-woocommerce/',
		'category' => 'product',
	);

	/**
	 * Register hooks.
	 */
	public function register_hooks()
	{
		add_action('rest_api_init', array($this, 'rest_api_init'));
	}

	public function rest_api_init()
	{
		// The TranslatePress plugin is not active, do nothing.
		if (!class_exists('WooCommerce', false)) {
			return;
		}

		$namespace = 'app-builder/v1';
		$route = 'wps-crp';

		register_rest_route($namespace, $route . '/get-referral/(?P<user_id>\d+)', [
			'methods' => WP_REST_Server::READABLE,
			'callback' => array($this, 'get_user_coupon_referral'),
			'permission_callback' => array($this, 'update_item_permissions_check'),
		]);

		register_rest_route($namespace, $route . '/referral-signup', [
			'methods' => WP_REST_Server::CREATABLE,
			'callback' => array($this, 'referral_signup'),
			'permission_callback' => array($this, 'update_item_permissions_check'),
		]);

		register_rest_route($namespace, $route . '/enable-referral-signup', [
			'methods' => WP_REST_Server::READABLE,
			'callback' => array($this, 'enable_referral_signup'),
			'permission_callback' => '__return_true',
		]);
	}

	public function get_user_referral_code($request)
	{
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');

		$user_id = $request['user_id'];

		$referral_code = '';
		$referral_key = get_user_meta($user_id, 'referral_key', true);
		if (empty($referral_key)) {
			$crp_public_obj->get_referral_link($user_id);
			$referral_key = get_user_meta($user_id, 'referral_key', true);
		}
		if (isset($referral_key) && !empty($referral_key)) {
			$coupon = new WC_Coupon($referral_key);
			if (isset($coupon) && !empty($coupon)) {
				$coupon_id = $coupon->get_id();
				if (isset($coupon_id) && !empty($coupon_id)) {
					$coupon_user_id = get_post_meta($coupon_id, 'mwb_crp_coupon_user_id', true);
					if ($user_id == $coupon_user_id) {
						$referral_code = $referral_key;
					}
				} else {
					$referral_code = $crp_public_obj->mwb_crp_generate_referral_coupon_callback($referral_key, $user_id);
				}
			}
		}

		return $referral_code;
	}

	public function wps_crp_get_referrals_callback($request)
	{

		$users = get_users(array('fields' => array('ID')));
		$mwb_crp_data_array = array();
		$user_id = $request['user_id'];
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');

		$users_crp_data = $crp_public_obj->get_revenue($user_id);
		$mwb_crp_user_name = get_userdata($user_id)->data->display_name;
		$mwb_crp_user_email = get_userdata($user_id)->data->user_email;
		$get_utilize_coupon_amount = $crp_public_obj->get_utilize_coupon_amount($user_id);
		$mwb_crp_data = array(
			'id' => $user_id,
			'user_name' => $mwb_crp_user_name,
			'user_email' => $mwb_crp_user_email,
			'referred_users' => $users_crp_data['referred_users'],
			'utilize' => $get_utilize_coupon_amount,
			'no_of_coupons' => $users_crp_data['total_coupon'],
			'referral_code' => $this->get_user_referral_code($request),
		);

		return $mwb_crp_data;
	}

	public function convert_html($data)
	{
		return html_entity_decode(wp_strip_all_tags(wp_kses_post($data)));
	}

	public function get_referral_coupon_amount_limit_html()
	{
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');
		$referral_discount_maxi_amt = get_option('referral_discount_upto', 0);
		$mwb_cpr_amount_html = '';
		if (0 != $referral_discount_maxi_amt) {

			if ('mwb_cpr_referral_percent' === $crp_public_obj->get_referral_coupon_amount_type() && 'mwb_cpr_percent' === $crp_public_obj->mwb_get_discount_type()) {

				$mwb_cpr_amount_html = $referral_discount_maxi_amt . '%';
			} else {
				$mwb_cpr_amount_html = wc_price($referral_discount_maxi_amt);

			}
		}

		return $this->convert_html($mwb_cpr_amount_html);
	}

	public function get_user_coupon_referral($request)
	{
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');
		$admin = new Coupon_Referral_Program_Admin('coupon-referral-program', '1.7.7');

		$user_id = $request['user_id'];

		$coupon_data = $admin->wps_crp_user_coupon_data($user_id);

		$enable_plugin = is_enable_coupon_referral_program();

		foreach ($coupon_data as $key => $value) {
			$coupon = new WC_Coupon($value['coupon_code']);
			$coupon_created = $crp_public_obj->mwb_crp_get_transalted_coupon_created_date($coupon);
			$crp_user_id = json_encode(
				$crp_public_obj->mwb_crp_get_referal_signup_coupon($user_id)[$coupon->id] ??
				$crp_public_obj->get_referral_purchase_coupons($user_id)[$coupon->id]
			);
			$value['coupon_created'] = $coupon_created;
			$value['referred_users'] = get_userdata($crp_user_id)->data->display_name;
			$coupon_data[$key] = $value;
		}

		$mwb_cpr_referral_fixed = 'mwb_cpr_referral_fixed' === $crp_public_obj->get_referral_coupon_amount_type();
		$ref_discout_order = $crp_public_obj->get_referral_discount_order($user_id);

		$referral_discount = $mwb_cpr_referral_fixed ? $this->convert_html(wc_price($ref_discout_order)) : $ref_discout_order . '%';

		$referral_upto = $this->get_referral_coupon_amount_limit_html();
		$signup_discount = $crp_public_obj->check_signup_is_enable() ? $this->convert_html($crp_public_obj->get_signup_discount_html()) : "";
		$refree_signup = $crp_public_obj->check_reffre_signup_is_enable() ? $this->convert_html($crp_public_obj->get_refree_signup_discount_html()) : "";

		$data = array_merge(
			$this->wps_crp_get_referrals_callback($request),
			array('referral_discount' => $referral_discount),
			array('referral_upto' => $referral_upto),
			array('signup_discount' => $signup_discount),
			array('refree_signup' => $refree_signup),
			[
				'coupon_data' => $coupon_data
			]
		);

		if (!$data) {
			return new \WP_Error('no_code', 'Referral code not found', array('status' => 404));
		}

		return rest_ensure_response($data);
	}

	public function enable_referral_signup()
	{
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');
		$enable = $crp_public_obj->check_signup_is_enable() || $crp_public_obj->check_reffral_signup_is_enable() || $crp_public_obj->check_reffre_signup_is_enable();
		$enable_plugin = is_enable_coupon_referral_program();

		if ($enable_plugin) {
			return rest_ensure_response(array('enable_ref_signup' => $enable));
		} else {
			return rest_ensure_response(response: array('enable_ref_signup' => false));
		}
	}

	public function referral_signup($request)
	{
		$crp_public_obj = new Coupon_Referral_Program_Public('coupon-referral-program', '1.7.7');
		$user_id = $request->get_param('user_id');

		$data = [
			'referral_key' => $request->get_param('referral_key'),
			'expirydate' => $request->get_param('expirydate'),
		];

		$json = json_encode($data);

		$encoded = base64_encode($json);

		$_COOKIE['mwb_cpr_cookie_set'] = $encoded;

		$crp_public_obj->woocommerce_created_customer_discount($user_id);

		return rest_ensure_response(array('status' => "success"));
	}

	public function update_item_permissions_check()
	{
		if (get_current_user_id() == 0) {
			return false;
		}
		return true;
	}
}
