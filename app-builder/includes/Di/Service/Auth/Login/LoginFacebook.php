<?php

namespace AppBuilder\Di\Service\Auth\Login;

use WP_REST_Request;
use WP_User;
use WP_Error;
use AppBuilder\Di\App\Http\HttpClientInterface;
use AppBuilder\Traits\Feature;

/**
 * LoginFacebook class.
 *
 * @link       https://appcheap.io
 * @since      5.0.0
 * @author     ngocdt
 */
class LoginFacebook implements LoginInterface {
	use Feature;

	/**
	 * Http client.
	 *
	 * @var HttpClientInterface
	 */
	protected $http_client;

	/**
	 * Constructor.
	 *
	 * @param HttpClientInterface $http_client Http client.
	 */
	public function __construct( HttpClientInterface $http_client ) {
		$this->http_client = $http_client;
	}

	/**
	 * Login action.
	 *
	 * @param WP_REST_Request $request Request object.
	 *
	 * @return Wp_User|WP_Error Response object.
	 */
	public function login( WP_REST_Request $request ) {

		$settings = app_builder()->get( 'settings' )->feature( 'login_facebook' );
		if ( $this->is_feature_disabled( $settings, true ) ) {
			return new WP_Error(
				'login_facebook',
				__( 'Login with Facebook is not enable.', 'app-builder' ),
				array(
					'status' => 403,
				)
			);
		}

		$access_token     = $request->get_param( 'token' );
		$role             = $request->get_param( 'role' );
		$facebook_user_id = $request->get_param( 'facebook_user_id' );

		$grap_api = 'https://graph.facebook.com/' . $facebook_user_id;

		// Add params to grap api.
		$grap_api = add_query_arg(
			array(
				'fields'       => 'id,first_name,last_name,name,picture,email',
				'access_token' => $access_token,
			),
			$grap_api
		);

		$response = $this->http_client->get( $grap_api );

		if ( is_wp_error( $response ) ) {
			return new WP_Error(
				'login_facebook_error',
				$response->get_error_message(),
				array(
					'status' => 403,
				)
			);
		}

		$body = wp_remote_retrieve_body( $response );

		$body = json_decode( $body, true );

		if ( isset( $body['error'] ) ) {
			return new WP_Error(
				'login_facebook_error',
				$body['error']['message'],
				array(
					'status' => 403,
				)
			);
		}

		// User data.
		$email      = $body['email'];
		$id         = $body['id'];
		$first_name = $body['first_name'];
		$last_name  = $body['last_name'];
		$name       = $body['name'];
		$picture    = isset( $body['picture']['data']['url'] ) ? $body['picture']['data']['url'] : '';

		if ( ! $email ) {
			return new WP_Error(
				'email_not_exist',
				__( 'User not provider email', 'app-builder' ),
				array(
					'status' => 403,
				)
			);
		}

		$user = get_user_by( 'email', $email );

		// Return data if user exist in database.
		if ( $user ) {
			return $user;
		}

		$user_id = wp_insert_user(
			array(
				'user_pass'     => wp_generate_password(),
				'user_login'    => $email,
				'user_nicename' => $name,
				'user_email'    => $email,
				'display_name'  => $name,
				'first_name'    => $first_name,
				'last_name'     => $last_name,
				'role'          => $role,
			)
		);

		if ( is_wp_error( $user_id ) ) {
			return $user_id;
		}

		// Get user.
		$user = get_user_by( 'id', $user_id );

		add_user_meta( $user_id, 'app_builder_login_type', 'facebook', true );
		add_user_meta( $user_id, 'app_builder_login_avatar', $picture, true );

		return $user;
	}
}
