<?php 
/*
Plugin Name:  ProductKey auto add
Description:  Добовляет SWID сразу после создания продукта или плагина. 
Version:      1.0
Author:       Zhakiya Akadil
Author URI:   https://www.instagram.com/zhakia_ak/
*/


if ( !function_exists( 'add_action' ) ) {
	echo 'Привет это простой плагин так что тебе тут ничего делать.';
	exit;
}

add_action( 'save_post', 'auto_add_product_attributes', 50, 3 );
function auto_add_product_attributes( $post_id, $post, $update  ) {

    ## --- Checking --- ##

    if ( $post->post_type != 'product') return; // Only products

    // Exit if it's an autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $post_id;

    // Exit if it's an update
    if( $update )
        return $post_id;

    // Exit if user is not allowed
    if ( ! current_user_can( 'edit_product', $post_id ) )
        return $post_id;


    // Get an instance of the WC_Product object
    $product = wc_get_product( $post_id );
	$valueHesh = md5($post_id);
    // Set the array of WC_Product_Attribute objects in the product

	$att_plugin = Array('productkey' =>Array(
		'name'=>'productKey',
		'value'=> strval( $valueHesh ),
		'is_visible' => '0',
		'is_taxonomy' => '0'
	  ));
	
	
	update_post_meta( $post_id, '_product_attributes', $att_plugin);
	
    $product->save(); // Save the product
}
