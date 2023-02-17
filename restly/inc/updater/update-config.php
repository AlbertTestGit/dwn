<?php

function restly_decode_du( $str ) {
	$str = str_replace( 'cZ5^9o#!', 'updatetheme.themepul.dev', $str );
	$str = str_replace( 'aI7!8B4H', '', $str );
	$str = str_replace( '^93|3d@', 'https', $str );
	$str = str_replace( 't7Cg*^n0', 'restly', $str );
	$str = str_replace( '3O7%jfGc', '.zip', $str );
	return urldecode( $str );
}


// Updater.
require get_template_directory() . '/inc/updater/classes/Restly_base.php';
require get_template_directory() . '/inc/updater/classes/Restly_register_theme.php';
require get_template_directory() . '/inc/updater/classes/Restly_admin_page.php';
require get_template_directory() . '/inc/updater/admin/dashboard/Restly_admin_dashboard.php';
require get_template_directory() . '/inc/updater/classes/Restly_update_checker.php';

function restly_verify_admin_css() {
	wp_enqueue_style( 'restly-admin-dashboard', get_template_directory_uri() . '/inc/updater/css/admin-dashboard.min.css' );
}

add_action( 'admin_enqueue_scripts', 'restly_verify_admin_css' );
