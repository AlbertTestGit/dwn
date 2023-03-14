<?php
//shop Page Options
CSF::createSection($restlyThemeOption, array(
    'parent' => 'restly_shop_options',
    'title'  => esc_html__('Shop Page', 'restly'),
    'icon'   => 'fa fa-long-arrow-right',
    'fields' => array(
        array(
            'id'      => 'restly_shop_layout',
            'type'    => 'select',
            'title'   => esc_html__('Shop Layout', 'restly'),
            'subtitle'   => esc_html__('Select Your Shop Page Layout', 'restly'),
            'options' => array(
                'grid'          => esc_html__('Grid Full', 'restly'),
                'left-sidebar'  => esc_html__('Left Sidebar', 'restly'),
                'right-sidebar' => esc_html__('Right Sidebar', 'restly'),
            ),
            'default' => 'right-sidebar',
        ),
        array(
            'id'       => 'restly_shop_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'restly'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'restly'),
            'text_off' => esc_html__('No', 'restly'),
            'desc'     => esc_html__('Hide / Show Banner.', 'restly'),
        ),
        array(
            'id'                    => 'restly_shop_banner_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Banner Background', 'restly'),
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
            'dependency' => array( 'restly_shop_banner_enable', '==', 'true' ),
            'output'                => '.breadcroumb-area.shop',
            'subtitle'              => esc_html__('Select banner default properties for all page / post. You can override this settings on individual page / post.', 'restly'),
            'desc'                  => esc_html__('If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'restly'),
        ),
        array(
            'id'       => 'restly_shop_breadcrumb_normal_color',
            'type'     => 'color',
            'title'    => esc_html__('Breadcrumb Text Color', 'restly'),
            'dependency' => array( 'restly_shop_banner_enable', '==', 'true' ),
            'output'   => '.breadcroumb-area.shop .breadcroumn-contnt .brea-title',
            'subtitle' => esc_html__('Breadcrumb Text Color', 'restly'),
            'desc'     => esc_html__('Select breadcrumb text color.', 'restly'),
        ),
        array(
            'id'       => 'restly_shop_breadcrumb_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Breadcrumb Link Color', 'restly'),
            'output'   => array('.breadcroumb-area.shop .bre-sub span a span'),
            'subtitle' => esc_html__('Breadcrumb Link color', 'restly'),
            'dependency' => array( 'restly_shop_banner_enable', '==', 'true' ),
            'desc'     => esc_html__('Select breadcrumb link and link hover color.', 'restly'),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Shop Page Color Options', 'restly'),
        ),
        array(
            'id'                    => 'restly_shop_body_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Shop Page Background', 'restly'),
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
            'output'     => '.woocommerce-shop',
            'subtitle'   => esc_html__('Select The Background color for Shop Page', 'restly'),
        ),
        array(
            'id'     => 'restly_shop_item_content_color',
            'type'   => 'color',
            'title'  => esc_html__('Content Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Item Content Color', 'restly'),
            'output' => '.restly-product-list-view .product-list-dec' 
        ),
        array(
            'id'      => 'restly_shop_item_ctitle',
            'type'    => 'link_color',
            'title'   => esc_html__('Items Link Color', 'restly'),
            'subtitle'   => esc_html__('Add Color for Shop Items Title', 'restly'),
            'output'  => array('.woo-single-item-warpper .product-item .product-info .product-holder .woocommerce-loop-product__title','.woocommerce-shop ul.product_list_widget li a'),
        ),
        array(
            'id'     => 'restly_shop_item_color',
            'type'   => 'color',
            'title'  => esc_html__('Price & Rating Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Item Price & Rating Color', 'restly'),
            'desc'  => esc_html__('This color for -> Price and rating', 'restly'),
            'output' => array( '.woocommerce ul.products li.product .price','.woocommerce .star-rating::before','.woocommerce .star-rating span::before','.woocommerce-shop ul.product_list_widget li ins','.woocommerce-shop ul.product_list_widget li del','.woocommerce-shop span.woocommerce-Price-amount.amount' ) 
        ),
        array(
            'id'     => 'restly_shop_item_btns_grup',
            'type'   => 'fieldset',
            'title'  => esc_html__('Button Color Options', 'restly'),
            'subtitle'  => esc_html__('Add Color For Shop Page Button', 'restly'),
            'fields' => array(
              array(
                'id'    => 'restly_shop_item_btns_color',
                'type'  => 'color',
                'title' => esc_html__('Button Color', 'restly'),
                'output'  => array('.product-info .product-content a.button','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a'),
              ),
              array(
                'id'                              => 'restly_shop_item_btns_bgcolor',
                'type'                            => 'background',
                'title'                           => esc_html__('Button Background', 'restly'),
                'background_gradient'             => true,
                'background_origin'               => true,
                'background_clip'                 => true,
                'background_blend_mode'           => true,
                'output'  => array('.product-info .product-content a.button','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a'),
              ),
              array(
                'id'    => 'restly_shop_item_btns_hcolor',
                'type'  => 'color',
                'title' => esc_html__('Hover Button', 'restly'),
                'output'  => array('.product-info .product-content a.button:hover','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a:hover'),
              ),
              array(
                'id'                              => 'restly_shop_item_btns_hbgcolor',
                'type'                            => 'background',
                'title'                           => esc_html__('Button Hover Background', 'restly'),
                'background_gradient'             => true,
                'background_origin'               => true,
                'background_clip'                 => true,
                'background_blend_mode'           => true,
                'output'  => array('.product-info .product-content a.button:hover','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a:hover'),
              ),
            ),
        ),
        array(
            'id'     => 'restly_shop_item_sidebr_grup',
            'type'   => 'fieldset',
            'title'  => esc_html__('Shop Page Sidebar Options', 'restly'),
            'subtitle'  => esc_html__('Add Color for Shop Page sidebar', 'restly'),
            'fields' => array(
              array(
                'id'    => 'restly_shop_sidebar_hading_color',
                'type'  => 'color',
                'title' => esc_html__('Hading Color Color', 'restly'),
                'output'  => '.restly-woocommerce-page .sidebar-widget-area h2.widget-title',
              ),
              array(
                'id'     => 'restly_shop_item_sidebar_bg',
                'type'   => 'color',
                'title'  => esc_html__('Sidebar Background', 'restly'),
                'subtitle'  => esc_html__('Add Sidebar Background Color', 'restly'),
                'output_mode' => 'background-color' , // Supports css properties like ( border-color, color, background-color etc )
                'output' => '.restly-woocommerce-page .sidebar-widget-area .widget'
              ),
              array(
                'id'    => 'restly_shop_item_sidebar_line',
                'type'  => 'color',
                'title' => esc_html__('Line Color', 'restly'),
                'output_mode' => 'background-color',
                'output'  => array('.restly-woocommerce-page .sidebar-widget-area h2.widget-title:before','.restly-woocommerce-page .sidebar-widget-area h2.widget-title:after'),
              ),
              
            ),
        ),
        
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Shop Navication Color Options', 'restly'),
        ),
        array(
            'id'     => 'restly_shop_item_navication_color',
            'type'   => 'color',
            'title'  => esc_html__('Navication Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Navication Color', 'restly'),
            'output_mode' => 'color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce-pagination ul li a' ) 
        ),
        array(
            'id'     => 'restly_shop_item_navication_borcolor',
            'type'   => 'color',
            'title'  => esc_html__('Navication Border Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Navication Color', 'restly'),
            'output_mode' => 'border-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce-pagination ul li a' ) 
        ),

        array(
            'id'     => 'restly_shop_item_navication_hcolor',
            'type'   => 'color',
            'title'  => esc_html__('Hover Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Navication Hover Color', 'restly'),
            'output_mode' => 'color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current','.woocommerce ul.products li.product .onsale' ) 
        ),
        array(
            'id'     => 'restly_shop_item_navication_hbgborcolor',
            'type'   => 'color',
            'title'  => esc_html__('Hover Background Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Navication Background Hover Color', 'restly'),
            'output_mode' => 'background-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current','.woocommerce ul.products li.product .onsale' ) 
        ),
        array(
            'id'     => 'restly_shop_item_navication_hborcolor',
            'type'   => 'color',
            'title'  => esc_html__('Navication Border Hover Color', 'restly'),
            'subtitle'  => esc_html__('Add Product Navication Border Hover Color', 'restly'),
            'output_mode' => 'border-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current' ) 
        ),
    )
));