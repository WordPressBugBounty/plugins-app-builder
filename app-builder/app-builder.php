<?php
/**
 *
 * @link              https://appcheap.io
 * @since             1.0.0
 * @package           AppBuilder
 * @category          includes
 *
 * @wordpress-plugin
 * Plugin Name:       App Builder - Create Native Android & iOS Apps On The Flight
 * Plugin URI:        https://appcheap.io/docs
 * Description:       The App Builder has it all: drag and drop mobile app, power and control over your app. Get started now!.
 * Version:           5.5.3
 * Author:            Appcheap.io
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Author URI:        https://appcheap.io
 * Text Domain:       app-builder
 * Domain Path:       /languages
 *
 * App Builder is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * App Builder is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'APP_BUILDER_PLUGIN_FILE' ) ) {
	define( 'APP_BUILDER_PLUGIN_FILE', __FILE__ );
}

require_once __DIR__ . '/vendor/autoload.php';

$app_builder_container = new AppBuilder\Di\App\Container();

/**
 * Bind http client.
 */
$app_builder_container->set( 'http', AppBuilder\Di\App\Http\HttpClientFactory::createHttpClient( 'WordPress' ) );

/**
 * Bind activator.
 */
$app_builder_container->set( 'activator', AppBuilder\Activator::class );

/**
 * Bind deactivator.
 */
$app_builder_container->set( 'deactivator', AppBuilder\Deactivator::class );

/**
 * Bind App Settings.
 */
$app_builder_container->set( 'settings', AppBuilder\Setting::class );

/**
 * Bind App Addons.
 */
$app_builder_container->set( 'addons', AppBuilder\Addons::class );

/**
 * Bind App Features.
 */
$app_builder_container->set(
	'features',
	function ( $c ) {
		return new AppBuilder\Di\Service\Feature\FeatureFactory( $c->get( 'http' ) );
	}
);

/**
 * Bind App Integrations.
 */
$app_builder_container->set(
	'integrations',
	function ( $c ) {
		return new AppBuilder\Di\Service\Integration\Integrations( $c->get( 'http' ) );
	}
);

/**
 * Bind App Vendor store.
 */
$app_builder_container->set( 'vendor', AppBuilder\Di\Service\Vendor\StoreFactory::class );
$app_builder_container->set( 'store', AppBuilder\Di\Service\Store\Store::class );

/**
 * Bind Admin and Frontend.
 */
$app_builder_container->set( 'admin', AppBuilder\Di\Service\Admin\Admin::class );
$app_builder_container->set( 'frontend', AppBuilder\Di\Service\Frontend\Frontend::class );

/**
 * Bind Token.
 */
$app_builder_container->set(
	'token',
	function ( $c ) {
		return new AppBuilder\Classs\Token( $c->get( 'settings' )->feature( 'jwt_authentication' ) );
	}
);

/**
 * App builder template.
 */
$app_builder_container->set( 'app_builder_template', AppBuilder\Classs\BuilderTemplate::class );

/**
 * Bind App Auth.
 */
$app_builder_container->set(
	'auth',
	function ( $c ) {
		return new AppBuilder\Di\Service\Auth\Auth( $c->get( 'http' ) );
	}
);

/**
 * Bind Cache.
 */
$app_builder_container->set(
	'cache',
	function ( $c ) {
		return new AppBuilder\Di\Service\Api\Cache( $c->get( 'settings' )->feature( 'cache_control' ) );
	}
);

/**
 * The global App Builder container.
 */
$GLOBALS['app_builder'] = $app_builder_container;

/**
 * Alias of App Builder container.
 */
function app_builder() {
	return $GLOBALS['app_builder'];
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
AppBuilder\Main::instance()->init();
