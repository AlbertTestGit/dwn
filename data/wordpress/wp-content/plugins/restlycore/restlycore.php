<?php
/*
Plugin Name: Restly Core
Author: ThemePul
Author URI: http://themepul.com
Version: 1.2.2
Description: This plugin is required for Restly WordPress theme
Text Domain: restlycore
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'RESTLY_CORE', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );

// Translate direction
load_plugin_textdomain( 'restlycore', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
require_once 'inc/restly-elementor-template-library/restly-template-library.php';
include_once('elementor-widgets/custom-elements-for-elementor.php' );

include_once('inc/restlycore-functions.php' );
include_once('inc/demo.php' );
include_once('addon-icon.php' );
if( class_exists( 'CSF' ) ) {
include_once('inc/widgets/custom-widgets.php' );
include_once('inc/icons.php' );
}
$theme = wp_get_theme();
if ( 'Restly' == $theme->name || 'Restly' == $theme->parent_theme ) {
    include_once('inc/wp-custom-posts.php' );  
}

// Registering toolkit files
function restlycore_files() {
    wp_enqueue_style( 'iconfont', plugin_dir_url( __FILE__ ) . 'assets/css/iconfont.css', array('bootstrap','bootstrap-rtl','bootstrap-icons','fontawesome-all','magnific-popup','slick','restly-unitest'), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', plugin_dir_url( __FILE__ ) . 'assets/css/flaticon.css', array('bootstrap','bootstrap-rtl','bootstrap-icons','fontawesome-all','magnific-popup','slick','restly-unitest'), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-css', plugin_dir_url( __FILE__ ) . 'assets/css/owl.css', array(), '2.2.0', 'all' );
    wp_enqueue_style( 'animate-min', plugin_dir_url( __FILE__ ) . 'assets/css/animate-min.css', array(), '2.2.0', 'all' );
    wp_enqueue_style( 'restly-custom-widget', plugin_dir_url( __FILE__ ) . 'assets/css/custom-widgets.css', array('bootstrap','bootstrap-rtl','bootstrap-icons','fontawesome-all','magnific-popup','slick','restly-unitest','restly-theme','owl-css'), '1.0.0', 'all' );
    wp_enqueue_script('restly-count-js', plugin_dir_url(__FILE__) . 'assets/js/count-to.js', array('jquery'), 1.0, true);
    wp_enqueue_script('restly-appear-js', plugin_dir_url(__FILE__) . 'assets/js/jquery-appear.js', array('jquery'), 1.0, true);
    wp_enqueue_script('isotop-min-js', plugin_dir_url(__FILE__) . 'assets/js/isotop-min.js', array('jquery'), 3.6, true);
    wp_enqueue_script('owl-js', plugin_dir_url(__FILE__) . 'assets/js/owl.js', array('jquery'), 2.2 , true);
    
}
add_action( 'wp_enqueue_scripts', 'restlycore_files' );
/**
 * Enqueue Backend Styles And Scripts.
 **/
function restly_backend_css_js( $screen ) {
    wp_enqueue_style( 'iconfont', plugin_dir_url( __FILE__ ) . 'assets/css/iconfont.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'flaticon', plugin_dir_url( __FILE__ ) . 'assets/css/flaticon.css', array(), '1.0.0', 'all' );
}
add_action( 'admin_enqueue_scripts', 'restly_backend_css_js' );

// Removed Contact Form 7 P Tag
add_filter('wpcf7_autop_or_not', '__return_false');

