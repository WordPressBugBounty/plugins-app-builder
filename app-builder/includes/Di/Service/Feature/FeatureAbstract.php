<?php

/**
 * CustomIcon
 *
 * @link       https://appcheap.io
 * @since      1.0.0
 * @author     ngocdt
 * @package    AppBuilder
 */

namespace AppBuilder\Di\Service\Feature;

defined( 'ABSPATH' ) || exit;

/**
 * Abstract class FeatureAbstract.
 */
abstract class FeatureAbstract {

	/**
	 * Meta key
	 *
	 * @var string
	 */
	protected $meta_key;

	/**
	 * Default settings
	 *
	 * @var array
	 */
	protected $default_settings;

	/**
	 * Register feature activation hooks.
	 *
	 * @return void
	 */
	abstract public function activation_hooks();

	/**
	 * Both for admin and public hooks
	 *
	 * @return void
	 */
	abstract public function register_hooks();

	/**
	 * Get data
	 *
	 * @return array
	 */
	public function get_data() {
		$data = get_option( $this->meta_key, array() );

		if ( ! is_array( $data ) ) {
			$data = array();
		}

		return wp_parse_args( $data, $this->default_settings );
	}

	/**
	 * Set data
	 *
	 * @param array $data Data.
	 *
	 * @return void
	 */
	public function set_data( $data ) {
		if ( isset( $data[ $this->meta_key ] ) ) {
			update_option( $this->meta_key, wp_parse_args( $data[ $this->meta_key ], $this->get_data() ) );
		}
	}

	/**
	 * Get meta key
	 *
	 * @return string
	 */
	public function get_meta_key() {
		return $this->meta_key;
	}

	/**
	 * Get form fields
	 */
	public function get_form_fields() {
		return array();
	}

	/**
	 * Register form fields
	 *
	 * @param array $features features.
	 *
	 * @return array features.
	 */
	public function register_form_fields( $features ) {
		$features[ $this->meta_key ] = $this->get_form_fields();
		return $features;
	}

	/**
	 * Check status of data
	 *
	 * @return boolean.
	 */
	public function get_status() {
		$data = $this->get_data();
		return isset( $data['status'] ) ? (int) $data['status'] : 0;
	}

	/**
	 * Check status of data
	 *
	 * @return boolean.
	 */
	public function is_active() {
		return in_array( $this->get_status(), array( 1, '1', true, 'true' ), true );
	}

	/**
	 * Check status of data
	 *
	 * @return boolean.
	 */
	public function is_deactive() {
		return ! $this->is_active();
	}
}
