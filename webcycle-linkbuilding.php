<?php
/*
Plugin Name: Webcycle Linkbuilding
Plugin URI: http://www.webcycle.nl
Description: Webcycle Linkbuilding is een Wordpress Plugin om de automatische linkplaatsing door de Webcycle tool mogelijk te maken.
Version: 1.0
Author: Switchy Media
Author URI: http://www.webcycle.nl
License: GPL2
*/

function webcycle_linkbuilding_menu()
{
     add_menu_page('Webcycle Linkbuilding Options', 'Webcycle Linkbuilding', 'manage_options', 'webcycle-linkbuilding-menu', 'webcycle_linkbuilding_options');

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

function webcycle_linkbuilding_options()
{
     include('admin/webcycle-linkbuilding-admin.php');
} 

function webcycle_function( $atts ) {

	$tokenId = get_settings('webcycle_token_id');
	$linkId = get_settings('webcycle_link_id');

	if ($atts['linkbuilding'] == 'true') {
		if (!empty($tokenId) && !empty($linkId)) {
			$content = file_get_contents("http://www.webcycle.nl/api/{$tokenId}/{$linkId}.html");
			return $content; 
		}
	} else {
		return "";
	}

    return "U heeft nog geen token / link id ingevuld";
}


function register_mysettings() 
{
	//register our settings
	register_setting( 'webcycle-settings', 'webcycle_token_id' );
	register_setting( 'webcycle-settings', 'webcycle_link_id' );
} 

add_action('admin_menu','webcycle_linkbuilding_menu');

add_shortcode('webcycle', 'webcycle_function');

