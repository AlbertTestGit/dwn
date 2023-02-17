<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
CSF::createSection( $restlyThemeOption, array(
    'title'  => esc_html__( 'General', 'restly' ),
    'icon'   => 'fa fa-cogs',
    'fields' => array(
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Theme Colors Options', 'restly' ),
        ),
        array(
            'id'       => 'restly_ct_colar',
            'type'     => 'switcher',
            'default'  => false,
            'title'    => esc_html__( 'Enable Custom Color', 'restly' ),
            'subtitle' => esc_html__( 'Enable Custom Theme Colors if you need', 'restly' ),
        ),
        array(
            'id'          => 'restly_primary_color',
            'type'        => 'color',
            'title'    => esc_html__( 'Primary Color', 'restly' ),
            'subtitle'       => esc_html__( 'Add primary Theme Color', 'restly' ),
            'default'     => '#2058bf',
            'dependency'  => array( 'restly_ct_colar', '==', 'true' ),
        ),
        array(
            'id'          => 'restly_secondary_color',
            'type'        => 'color',
            'title'    => esc_html__( 'Secondary Color', 'restly' ),
            'subtitle'       => esc_html__( 'Add Secondary Theme Colors', 'restly' ),
            'default'     => '#1d2c38',
            'dependency'  => array( 'restly_ct_colar', '==', 'true' ),
        ),
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Preloader Options', 'restly' ),
        ),
        array(
            'id'       => 'restly_enable_preloader',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Preloader', 'restly' ),
            'subtitle' => esc_html__( 'Select Site Preloader. Default Enable', 'restly' ),
        ),
        array(
            'id'          => 'restly_preloader_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Preloader color One', 'restly' ),
            'default'     => '#104cba',
            'dependency'  => array( 'restly_enable_preloader', '==', 'true' ),
            'output'      => '.theme-loader:before',
            'output_mode' => 'border-color', // Supports css properties like ( border-color, color, background-color etc )
        ),
        array(
            'id'          => 'restly_preloader2_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Preloader color Two', 'restly' ),
            'default'     => '#1d2c38',
            'dependency'  => array( 'restly_enable_preloader', '==', 'true' ),
            'output'      => '.theme-loader:after',
            'output_mode' => 'border-color', // Supports css properties like ( border-color, color, background-color etc )
        ),
        array(
            'id'          => 'restly_preloader3_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Preloader Full Width Background', 'restly' ),
            'default'     => '#ffffff',
            'dependency'  => array( 'restly_enable_preloader', '==', 'true' ),
            'output'      => '.preloader-area',
            'output_mode' => 'background-color', // Supports css properties like ( border-color, color, background-color etc )
        ),
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Comment Options', 'restly' ),
        ),
        array(
            'id'       => 'restly_enable_page_cmt',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Enable Comment for page', 'restly' ),
            'subtitle' => esc_html__( 'Enable Comment section on Page', 'restly' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Top To Bottom Button Settings', 'restly' ),
        ),
        array(
            'id'       => 'restly_enable_top_to_bottom',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Enable Top To Bottom Icon', 'restly' ),
            'subtitle' => esc_html__( 'Enable Top To Bottom Icon', 'restly' ),
        ),
        array(
            'id'      => 'restly_enable_ttb_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Select Icon', 'restly' ),
            'default' => 'fa fa-angle-up',
            'dependency'  => array( 'restly_enable_top_to_bottom', '==', 'true' ),
        ),
        array(
            'id'          => 'restly_enable_ttb_bgi',
            'type'        => 'color',
            'title'       => esc_html__( 'Icon Color', 'restly' ),
            'subtitle'       => esc_html__( 'Add Color for Top To bottom icon', 'restly' ),
            'default'     => '#ffffff',
            'dependency'  => array( 'restly_enable_top_to_bottom', '==', 'true' ),
            'output'      => '.to-top',
            'output_mode' => 'color',
        ),
        array(
            'id'          => 'restly_enable_ttb_bg',
            'type'        => 'color',
            'title'       => esc_html__( 'Background Color', 'restly' ),
            'subtitle'       => esc_html__( 'Add Background Color for Top To bottom icon', 'restly' ),
            'default'     => '#2058bf',
            'dependency'  => array( 'restly_enable_top_to_bottom', '==', 'true' ),
            'output'      => '.to-top',
            'output_mode' => 'background-color',
        ),
    ),
) );