<?php
/*
Plugin Name:  Custom REST API v 1.1
Description:  обробатывает и дает информацию Амиржану, v1.1 Добавил возсожность просмотриавать плагины раздельно по pluginID. доступ только своим 
Version:      1.3
Author:       Zhakiya Akadil
Author URI:   https://www.instagram.com/zhakia_ak/
*/


if ( !function_exists( 'add_action' ) ) {
    echo 'Привет это простой плагин так что тебе тут ничего делать.';
    exit;
}


function accessProtected($obj, $prop) {
    $reflection = new ReflectionClass($obj);
    $property = $reflection->getProperty($prop);
    $property->setAccessible(true);
    return $property->getValue($obj);
  }

function custom_endpoint ( $request ) {
   
    $verify = 'Bearer eyJhbGciOiJIUzI1NiJ9.e30.IcewD6aHHneV8OmlYIjUYpeOQglvBQ1gK7o51Lfp7xo';

    $header = accessProtected($request, 'headers');

    $reqData = [
        'authorization' => $header['authorization'][0],
    ];

    if ($verify == ($reqData['authorization'])) {
        $plugins = [];
        $data = [
            'pluginID' => 0,
            'pluginName' => '',
            'SWID' => '',
    
        ];
        $products = wc_get_products( array(
            'status' => 'publish',
            'limit' => -1 ) );
    
        if ( empty( $products ) ) {
            return null;
        }
    
    
        foreach($products as $product) {
            $data['pluginID'] = $product->id;
            $data['pluginName'] = $product->name;
            $data['SWID'] = $product->attributes['productkey']['data']['options'][0];
            $plugins[] = $data;
        }
    
        return $plugins;
    }
    else {
        header('Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        die;
    }

    
}


add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v3', '/plugins/', array(
        'methods' => 'GET',
        'callback' => 'custom_endpoint',
        // 'permission_callback' => function($request) {
        //     return is_user_logged_in();
        // }
    ) );
} );


add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v3', '/plugins/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'custom_endpoint_getbyid',
    ) );
} );

function custom_endpoint_getbyid ( $request) {
    
    $verify = 'Bearer eyJhbGciOiJIUzI1NiJ9.e30.IcewD6aHHneV8OmlYIjUYpeOQglvBQ1gK7o51Lfp7xo';

    $header = accessProtected($request, 'headers');

    $reqData = [
        'authorization' => $header['authorization'][0],
    ];

    if ($verify == ($reqData['authorization'])) {

        $plugin = [
            'pluginID' => 0,
            'pluginName' => '',
            'SWID' => '',
       
        ];
        $productID = $request['id'];
        $product = wc_get_product( $productID );

        $plugin['pluginID'] = $product->id;
        $plugin['pluginName'] = $product->name;
        $plugin['SWID'] = $product->attributes['productkey']['data']['options'][0];

        return $plugin;
    }
    else {
        return 'Good luck!!!';
    }
    
}


?>