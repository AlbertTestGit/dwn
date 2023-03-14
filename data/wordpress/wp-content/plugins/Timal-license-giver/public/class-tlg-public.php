<?php

class Tlg_Public {
    public function __construct() {

    }

}


add_action( 'woocommerce_order_status_completed', 'give_order_license' );
/*
 * Do something after WooCommerce set an order status as completed
 */

function give_order_license($order_id) {
    
    $api = Tlg_Admin::get_content();
    $current_user = wp_get_current_user();
    $user_login = $current_user->user_login;
    $user_pass = $current_user->user_pass ;

    $jwtData = [
        "username" => 'admin',
        "passHash" => '$P$BkjnvsRdC76dQWsO.8hQj3hd7254pr1',
    ];
    $JWT_URL = $api['content'] .  '/api/wordpress/jwt';

    $jwtData = json_encode($jwtData);
    $curl = curl_init($JWT_URL);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $jwtData);

    $json_response = curl_exec($curl);

    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ( $status != 201 ) {
        die("Error: call to URL $url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
    }


    curl_close($curl);

    $jwtForAction = json_decode($json_response, true);

    $jwtForAction = $jwtForAction['access_token'];

    $order = wc_get_order( $order_id );

    $data = [
        'userId'   => 0,
        'swid' => '',
        'amount'    => 0,
        
    ];

    foreach ( $order->get_items() as $item_id => $item ) {
        // находим продукт и его атрибут
        $product_id      = $item->get_product_id();
        $_productAttributes = wc_get_product( $product_id );
        $_productKey = ($_productAttributes->attributes['productkey']['options'][0]);
        // количество товара
        $quantity        = $item->get_quantity();


        $data['swid'] =  $_productKey;
        $data['userId'] = intval($order->get_user_id());
        $data['amount'] =   intval($quantity);


        $Data = json_encode($data);
        $authorization = "Authorization: Bearer " . $jwtForAction;

        $give_license_url = $api['content'] .  '/api/licenses';
        $curl = curl_init($give_license_url);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
                array("Content-type: application/json" , $authorization));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $Data);

        $json_response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ( $status != 201 ) {
            die("Error: call to URL $give_license_url failed with status $status, response $json_response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }


        curl_close($curl);

        $response = json_decode($json_response, true);
        echo $response;
     }
 
	
}
?>