<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$woometa = 'restly_woometa';

//
// Create a metabox
//
CSF::createMetabox( $woometa, array(
    'title'        => esc_html__( 'Restly NFT Options', 'restly' ),
    'post_type'    => array( 'product' ),
    'show_restore' => true,
) );
//
// Create a section
//
CSF::createSection( $woometa, array(
    'fields' => array(
        array(
            'id'     => 'restly_nft_colle_filedset',
            'type'   => 'fieldset',
            'title'  => esc_html__( 'NFT Collection Section', 'restly' ),
            'subtitle'  => esc_html__( 'This is NFT Collection Section area.', 'restly' ),
            'fields' => array(
                array(
                    'id'    => 'restly_nft_colle_enable',
                    'type'  => 'switcher',
                    'title' => esc_html__( 'Enable Collection', 'restly' ),
                    'subtitle' => esc_html__( 'Enable Collection Options if you need to add', 'restly' ),
                ),
                array(
                    'id'      => 'restly_nft_colle_lebel',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Collection Label', 'restly' ),
                    'default' => esc_html__( 'Collection', 'restly' ),
                    'dependency' => array( 'restly_nft_colle_enable', '==', 'true' ),
                ),
                array(
                    'id'           => 'restly_nft_colle_media',
                    'type'         => 'upload',
                    'title'        => esc_html__( 'Image Icon', 'restly' ),
                    'library'      => 'image',
                    'placeholder'  => 'http://',
                    'button_title' => esc_html__( 'Add Image', 'restly' ),
                    'remove_title' => esc_html__( 'Remove Image', 'restly' ),
                    'dependency' => array( 'restly_nft_colle_enable', '==', 'true' ),
                ),
                array(
                    'id'       => 'restly_nft_colle_link',
                    'type'     => 'link',
                    'title'    => esc_html__( 'Add Link', 'restly' ),
                    'subtitle'    => esc_html__( 'Add Link here', 'restly' ),
                    'default'  => array(
                      'url'    => '#',
                      'text'   => esc_html__( 'Cool Cats 2D', 'restly' ),
                      'target' => '_blank'
                    ),
                    'dependency' => array( 'restly_nft_colle_enable', '==', 'true' ),
                ),
            ),
        ),
        array(
            'id'     => 'restly_nft_place_bid_grup',
            'type'   => 'fieldset',
            'title'  => esc_html__( 'NFT Place BID Section', 'restly' ),
            'subtitle'  => esc_html__( 'This is NFT Place BID Section area.', 'restly' ),
            'fields' => array(
                array(
                    'id'    => 'restly_nft_plce_bid_enable',
                    'type'  => 'switcher',
                    'title' => esc_html__( 'Enable Collection', 'restly' ),
                    'subtitle' => esc_html__( 'Enable Collection Options if you need to add', 'restly' ),
                ),
                array(
                    'id'      => 'restly_nft_plce_bid_text',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Place Bid Text', 'restly' ),
                    'default' => esc_html__( 'Place Bid', 'restly' ),
                    'dependency' => array( 'restly_nft_plce_bid_enable', '==', 'true' ),
                ),
                array(
                    'id'       => 'restly_nft_place_bid_link',
                    'type'     => 'link',
                    'title'    => esc_html__( 'Add Link', 'restly' ),
                    'subtitle'    => esc_html__( 'Add Link here', 'restly' ),
                    'default'  => array(
                      'url'    => '#',
                      'text'   => '',
                      'target' => '_blank'
                    ),
                    'dependency' => array( 'restly_nft_plce_bid_enable', '==', 'true' ),
                ),
            ),
        ),
    ),
) );