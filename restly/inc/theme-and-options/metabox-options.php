<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$restlymetabox = 'restly_metabox';

//
// Create a metabox
//
CSF::createMetabox( $restlymetabox, array(
    'title'        => 'Metabox Options',
    'post_type'    => array( 'page', 'post', 'restly_portfolio', 'restly_team','restly_job' ),
    'show_restore' => true,
) );

//
// Create a section
//
CSF::createSection( $restlymetabox, array(
    'title'  => esc_html__( 'Header', 'restly' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'restly_meta_enable_header',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Header', 'restly' ),
            'subtitle' => esc_html__( 'Enable this Options if you need', 'restly' ),
        ),
        array(
            'id'          => 'restly_meta_select_header',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Header Style', 'restly' ),
            'placeholder' => esc_html__( 'Select an option', 'restly' ),
            'options'     => array(
                'one'   => esc_html__( 'Header One', 'restly' ),
                'two'   => esc_html__( 'Header Two', 'restly' ),
                'three' => esc_html__( 'Header Three', 'restly' ),
                'four' => esc_html__( 'Header Four', 'restly' ),
                'five' => esc_html__( 'Header Five', 'restly' ),
                'six' => esc_html__( 'Header Six', 'restly' ),
                'seven' => esc_html__( 'Header Seven', 'restly' ),
                'eight' => esc_html__( 'Header Eight', 'restly' ),
                'nine' => esc_html__( 'Header Nine', 'restly' ),
                'ten' => esc_html__( 'Header Ten', 'restly' ),
            ),
            'dependency'  => array( 'restly_meta_enable_header', '==', 'true' ),
        ),
        array(
            'id'       => 'restly_meta_enable_header_menu',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Header Menus', 'restly' ),
            'subtitle' => esc_html__( 'Enable this Options if you need', 'restly' ),
        ),
        array(
            'id'          => 'restly_meta_select_menu',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Menu', 'restly' ),
            'placeholder' => esc_html__( 'Select an option', 'restly' ),
            'options'     => 'menus',
            'dependency'  => array( 'restly_meta_enable_header_menu', '==', 'true' ),
        ),
        array(
            'id'          => 'restly_meta_select_logo',
            'type'        => 'switcher',
            'title'       => esc_html__( 'Specific Logo', 'restly' ),
            'subtitle'       => esc_html__( 'Enable Specific Logo Options', 'restly' ),
        ),
        array(
            'id'         => 'restly_meta_logo',
            'type'       => 'media',
            'title'      => esc_html__( 'Specific Logo', 'restly' ),
            'subtitle'   => esc_html__( '  Upload Specific Logo for page, post, Custom Post', 'restly' ),
            'library'    => 'image',
            'dependency' => array( 'restly_meta_select_logo', '==', 'true' ),
        ),
      
    ),
) );

// Create layout section
CSF::createSection( $restlymetabox, array(
    'title'  => esc_html__( 'Layout', 'restly' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'          => 'restly_layout_meta',
            'type'        => 'select',
            'title'       => esc_html__( 'Layout', 'restly' ),
            'placeholder' => esc_html__( 'Select an option', 'restly' ),
            'options'     => array(
                'full-width'    => esc_html__( 'Full Width', 'restly' ),
                'left-sidebar'  => esc_html__( 'Left Sidebar', 'restly' ),
                'right-sidebar' => esc_html__( 'Right Sidebar', 'restly' ),
            ),
            'desc'        => esc_html__( 'Select layout', 'restly' ),
        ),
        array(
            'id'         => 'restly_sidebar_meta',
            'type'       => 'select',
            'title'      => esc_html__( 'Sidebar', 'restly' ),
            'options'    => 'restly_sidebars',
            'dependency' => array( 'restly_layout_meta', 'any', 'left-sidebar,right-sidebar' ),
            'desc'       => esc_html__( 'Select sidebar you want to show with this page.', 'restly' ),
        ),
        array(
            'id'       => 'restly_meta_page_navbar',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Pagination', 'restly' ),
            'subtitle' => esc_html__( 'This Options only for Default page', 'restly' ),
            'default'  => true,
        ),
        array(
            'id'          => 'restly_meta_page_spacing',
            'type'        => 'spacing',
            'title'       => esc_html__( 'Padding', 'restly' ),
            'subtitle'    => esc_html__( 'Add Page Padding If you need', 'restly' ),
            'output'      => '.site-main.content-area',
            'output_mode' => 'padding',
        ),
    ),
) );

// Create a section
CSF::createSection( $restlymetabox, array(
    'title'  => esc_html__( 'Banner / Breadcrumb Area', 'restly' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'restly_meta_enable_banner',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Banner', 'restly' ),
            'text_on'  => esc_html__( 'Yes', 'restly' ),
            'text_off' => esc_html__( 'No', 'restly' ),
            'default'  => true,
            'desc'     => esc_html__( 'Enable or disable banner.', 'restly' ),
        ),
        array(
            'id'                    => 'restly_meta_banner_options',
            'type'                  => 'background',
            'title'                 => esc_html__( 'Banner Background', 'restly' ),
            'background_gradient'   => true,
            'background_origin'     => false,
            'background_clip'       => false,
            'background_blend-mode' => false,
            'default'               => array(
                'background-color'              => '',
                'background-gradient-color'     => '',
                'background-gradient-direction' => 'to right',
                'background-size'               => 'cover',
                'background-position'           => 'center center',
                'background-repeat'             => 'no-repeat',
            ),
            'dependency'            => array( 'restly_meta_enable_banner', '==', true ),
            'output'                => '.breadcroumb-area',
            'desc'                  => esc_html__( 'If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'restly' ),
        ),
        array(
            'id'         => 'restly_meta_banner_title_color',
            'type'       => 'color',
            'title'      => esc_html__( 'Banner Title Color', 'restly' ),
            'output'     => '.breadcroumn-contnt .brea-title',
            'dependency' => array( 'restly_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select banner title color.', 'restly' ),
        ),

        array(
            'id'         => 'restly_meta_breadcrumb_normal_color',
            'type'       => 'color',
            'title'      => esc_html__( 'Breadcrumb Text Color', 'restly' ),
            'output'     => '.bre-sub span',
            'subtitle'   => esc_html__( 'Breadcrumb Text Color', 'restly' ),
            'dependency' => array( 'restly_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select breadcrumb text color.', 'restly' ),
        ),

        array(
            'id'         => 'restly_meta_breadcrumb_link_color',
            'type'       => 'link_color',
            'title'      => esc_html__( 'Breadcrumb Link Color', 'restly' ),
            'output'     => array( '.bre-sub span a' ),
            'subtitle'   => esc_html__( 'Breadcrumb Link color', 'restly' ),
            'dependency' => array( 'restly_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select breadcrumb link and link hover color.', 'restly' ),
        ),

    ),
) );
CSF::createSection( $restlymetabox, array(
    'title'  => esc_html__( 'Footer Settings', 'restly' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'restly_meta_footer_style_shwo',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Footer Style', 'restly' ),
            'subtitle'    => esc_html__('Enable Footer Style for Specific Page, post or Custom Post', 'restly' ),
            'text_on'  => esc_html__( 'Yes', 'restly' ),
            'text_off' => esc_html__( 'No', 'restly' ),
            'default'  => false,
            'desc'     => esc_html__( 'Enable or disable Footer Style.', 'restly' ),
        ),
        array(
            'id'          => 'restly_meta_footer_styles',
            'type'        => 'select',
            'title'       => esc_html__( 'Footer Styles', 'restly' ),
            'placeholder' => esc_html__( 'Select an option', 'restly' ),
            'options'     => array(
                'one'   => esc_html__( 'Footer One', 'restly' ),
                'two'   => esc_html__( 'Footer Two', 'restly' ),
                'three' => esc_html__( 'Footer Three', 'restly' ),
                'four' => esc_html__( 'Footer Four', 'restly' ),
                'five' => esc_html__( 'Footer Five', 'restly' ),
                'six' => esc_html__( 'Footer Six', 'restly' ),
                'seven' => esc_html__( 'Footer Seven', 'restly' ),
            ),
            'dependency'  => array( 'restly_meta_footer_style_shwo', '==', true ),
            'subtitle'    => esc_html__( 'Select Your Footer', 'restly' ),
        ),
        array(
            'id'       => 'restly_meta_ft_widgets_show',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Footer Widget', 'restly' ),
            'subtitle'    => esc_html__('Enable Widgets Area Options for Specific Page', 'restly' ),
            'text_on'  => esc_html__( 'Yes', 'restly' ),
            'text_off' => esc_html__( 'No', 'restly' ),
            'default'  => false,
        ),
        array(
            'id'        => 'restly_meta_ft_widgets',
            'type'      => 'group',
            'title'     => esc_html__( 'Widgets Area', 'restly'),
            'subtitle'     => esc_html__( 'Add Your Widgets only for this page', 'restly'),
            'fields'    => array(
                array(
                    'id'          => 'restly_meta_ft_widget',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Footer Widgets Area', 'restly'),
                    'subtitle'       => esc_html__( 'Select Your Footer Widget for This Page', 'restly'),
                    'options'     => 'sidebars'
                ),
                array(
                    'id'          => 'restly_meta_ft_widget_col',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Select Column', 'restly'),
                    'subtitle'       => esc_html__( 'Select Column for this Widget', 'restly'),
                    'default'  => '3',
                    'options'     => array(
                        '3'   => esc_html__( 'Col 3 Default', 'restly' ),
                        '12'   => esc_html__( 'Col 12', 'restly' ),
                        '11'   => esc_html__( 'col 11', 'restly' ),
                        '10' => esc_html__( 'col 10', 'restly' ),
                        '9' => esc_html__( 'col 9', 'restly' ),
                        '8' => esc_html__( 'col 8', 'restly' ),
                        '7' => esc_html__( 'col 7', 'restly' ),
                        '6' => esc_html__( 'col 6', 'restly' ),
                        '5' => esc_html__( 'col 5', 'restly' ),
                        '4' => esc_html__( 'col 4', 'restly' ),
                        '2' => esc_html__( 'col 2', 'restly' ),
                    ),
                ),
            ),
            'dependency'  => array( 'restly_meta_ft_widgets_show', '==', true ),
        ),
    ),
) );
