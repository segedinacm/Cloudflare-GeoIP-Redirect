<?php
/*
Plugin Name: Cloudflare GeoIP Redirect
Plugin URI: https://webinvade.rs/wordpress-plugins/cloudflare-geoip-redirect/
Description: Easily setup redirect for visitors/users from selected countries to specific URL utilizing Cloudflare IP Geolocation.
Version: 1.0
Author: WebInvaders
Author URI: https://webinvade.rs/
License: A "Slug" license name e.g. GPL2
Text Domain: wicfr
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Checks if the XX plugin is activated
 *
 * If the XX plugin is not active, then don't allow the
 * activation of this plugin.
 *

function wicfr_activate() {
	if ( ! function_exists( 'is_plugin_active_for_network' ) ) {
		include_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	}
	if ( current_user_can( 'activate_plugins' ) && ! class_exists( 'CloudFlare' ) ) {
		// Deactivate the plugin.
		deactivate_plugins( plugin_basename( __FILE__ ) );
		// Throw an error in the WordPress admin console.
		$error_message = '<p style="font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Oxygen-Sans,Ubuntu,Cantarell,\'Helvetica Neue\',sans-serif;font-size: 13px;line-height: 1.5;color:#444;">' . esc_html__( 'This plugin requires ', 'wicfr' ) . '<a href="' . esc_url( 'https://wordpress.org/plugins/cloudflare/' ) . '" target="_blank">CloudFlare</a>' . esc_html__( ' plugin to be active.', 'wicfr' ) . '</p>';
		die( $error_message ); // WPCS: XSS ok.
	}
}
register_activation_hook( __FILE__, 'wicfr_activate' );
 */

/**
 *
 * Admin Page Framework
 *
 */
include dirname( __FILE__ ).'/options.php';

/**
 *
 * WI CloudFlare GeoIP redirect
 *
 */
function wi_cloudflareRedirect() {

	$country_code = $_SERVER["HTTP_CF_IPCOUNTRY"];
	$options = get_option( 'WICFR' );
	
	if( in_array('administrator',  wp_get_current_user()->roles) || strpos($_SERVER['REQUEST_URI'], 'wp-') !== false ) {
		/*
		echo '<div class="wicfredirect"> Cloudflare Redirect Plugin: '.$country_code.'</div>';
		new AdminPageFramework_AdminNotice( 'Cloudflare GeoIP Detected: '.$country_code, array( 'class' => 'updated' ) );
		print_r("http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
		*/
	}else{

		foreach ($options['settings'] as $s) {
			$compare = in_array($country_code, $s['country']);
			//print_r($s);
			//print_r($country_code);

			//print_r($compare);

			if( $compare ) {
				//print_r($s['country']);
				//echo $s['url'];
				if(empty($s['type'])) {
					echo 'NO redirection: '.$s['type'];
				}else {

					if ( $s['type'] == 100 ) {
						//echo 'redirection is set to none: '.$s['type'];
					}else{
						if ( ! empty( $s['url'] ) && $s['url'] ) {
							header( 'Location: ' . $s['url'], true, $s['type'] );
						}
					}

				}
			}
		}

	}

}
add_action('init','wi_cloudflareRedirect');
