<?php
/*
Plugin Name: Webcycle Linkbuilding
Plugin URI: http://www.webcycle.nl
Description: Webcycle Linkbuilding is een Wordpress Plugin om de automatische linkplaatsing door de gratis Webcycle tool mogelijk te maken.
Version: 5.1
Author: Switchy Media
Author URI: http://www.webcycle.nl
License: GPL2
*/

function webcycle_linkbuilding_menu()
{
	disable_webcycle_cache();
    $page = add_menu_page('Webcycle Linkbuilding Options', 'Webcycle Linkbuilding', 'manage_options', 'webcycle-linkbuilding-menu', 'webcycle_linkbuilding_options');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
	add_action( 'admin_print_styles-' . $page, 'webcycle_linkbuilding_admin_styles' );
}

function webcycle_linkbuilding_admin_styles() 
{
	/*
	* It will be called only on your plugin admin page, enqueue our stylesheet here
	*/
	wp_enqueue_style( 'webcycleLinkbuildingStylesheet' );
}

function webcycle_linkbuilding_options()
{
	disable_webcycle_cache();
    include('admin/webcycle-linkbuilding-admin.php');
} 

function webcycle_function( $atts ) 
{
	disable_webcycle_cache();
	
	$tokenId = get_settings('webcycle_token_id');
	$linkId = get_settings('webcycle_link_id');

	if ($atts['linkbuilding'] == 'true') {
		if (!empty($tokenId) && !empty($linkId)) {
			$url = "http://www.webcycle.nl/api/{$tokenId}/{$linkId}.html";
			$ch = curl_init();
			$timeout = 5;
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$data = curl_exec($ch);
			curl_close($ch);
			$content = $data;

			if (empty($content)) {
				$content = file_get_contents($url);
			}

			return $content; 
		}
	} else {
		return "";
	}

    return "U heeft nog geen token / link id ingevuld";
}


function register_mysettings() 
{
	disable_webcycle_cache();
	
	//register our settings
	register_setting( 'webcycle-settings', 'webcycle_token_id' );
	register_setting( 'webcycle-settings', 'webcycle_link_id' );
	wp_register_style( 'webcycleLinkbuildingStylesheet', plugins_url('css/stylesheet.css', __FILE__) );
} 

function disable_webcycle_cache() {
	$_SERVER['QUICK_CACHE_ALLOWED'] = false;
	define('QUICK_CACHE_ALLOWED', false);
	define('DONOTCACHEPAGE', true);
	wp_cache_flush();
}

add_action('admin_menu','webcycle_linkbuilding_menu');

add_shortcode('webcycle', 'webcycle_function');

