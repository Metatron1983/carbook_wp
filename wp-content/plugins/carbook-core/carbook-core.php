<?php
/*
Plugin Name: Carbook Core
Plugin URI: https://github.com/Metatron1983/
Description: That plagin is implement Carbook functionality.
Version: 1.0.0
Author: Maks
Author URI: https://github.com/Metatron1983/
License: GPLv2 or later
Text Domain: carbook-core
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

function elementor_test_addon() {

	// Load plugin file
	require_once plugin_dir_path(__FILE__) . '/inc/elementor.php';

	// Run the plugin
	\Elementor_Test_Addon\Plugin::instance();

	
}
add_action( 'plugins_loaded', 'elementor_test_addon' );

// function get_script_depends1() {
// 	// if(\Elementor\Plugin::$instance->preview->is_preview_mode()){
// 		wp_register_script('cb-index-main-banner', plugins_url('/js/elem-main.js', __FILE__), ['elementor-frontend'], '1.0', true);
// 		return ['cb-index-main-banner'];
// 	// }
// 	// return [];		
// }
// add_action( 'plugins_loaded', 'get_script_depends1', 100 );
function my_plugin_frontend_scripts() {

	wp_register_script('cb-index-main-banner', plugins_url('/inc/widgets/js/elem-main.js', __FILE__), ['elementor-frontend'], '1.0', true);
	

	wp_enqueue_script( 'cb-index-main-banner' );
	

}
add_action( 'elementor/frontend/after_register_scripts', 'my_plugin_frontend_scripts' );