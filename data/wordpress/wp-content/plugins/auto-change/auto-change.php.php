<?php
/*
Plugin Name: Auto change status
Description: change status order to complite
Version: 1.0
Author: Akadil Zhakia
Author URI: https://instagramm/zhakia_ak

*/

if ( ! defined( 'WPINC' ) ) die();

function   QuadLayers_change_order_status( $order_id ) {  
	if ( ! $order_id ) {return;}            
	$order = wc_get_order( $order_id );
	$order->update_status( 'wc-completed' );

}
add_action('woocommerce_thankyou','QuadLayers_change_order_status');