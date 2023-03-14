<?php 

if ( !function_exists( 'restly_options' ) ) {
    function restly_options( $option = '', $default = null ) {
        $defaults = restly_default_theme_options();
        $options = get_option( 'restly_Theme_Option' );
        $default = ( !isset( $default ) && isset( $defaults[$option] ) ) ? $defaults[$option] : $default;
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}
add_action( 'init', 'restly_custom_post_type' );
function restly_custom_post_type() {
    register_post_type( 'restly_portfolio',
        array(
            'labels' => array(
                'name' => esc_html__('Portfolio','restlycore'),
                'singular_name' => esc_html__('Portfolio','restlycore'),
            ),
            'show_in_rest'  => true,
            'supports'      => array('title','thumbnail', 'page-attributes','editor','excerpt'),
            'menu_icon'     => 'dashicons-image-filter',
            'public'        => true,
            'rewrite'               => array(
                'slug'              => restly_options('restly_portfolio_custom_slug'), 
                'with_front'        => true 
            )
        )
    );
    register_post_type( 'restly_team',
        array(
            'labels' => array(
                'name' => esc_html__('Team','restlycore'),
                'singular_name' => esc_html__('Team','restlycore'),
            ),
            'show_in_rest'  => true,
            'supports'      => array('title','thumbnail', 'page-attributes','editor','excerpt'),
            'menu_icon'     => 'dashicons-admin-users',
            'public'        => true,
            'rewrite'               => array(
                'slug'              => restly_options('restly_team_custom_slug'), 
                'with_front'        => true 
            )
        )
    );
    register_post_type( 'restly_job',
        array(
            'labels' => array(
                'name' => esc_html__('Job Post','restlycore'),
                'singular_name' => esc_html__('Job','restlycore'),
            ),
            'show_in_rest'  => true,
            'supports'      => array('title','thumbnail', 'page-attributes','editor','excerpt'),
            'menu_icon'     => 'dashicons-schedule',
            'public'        => true,
            'rewrite'               => array(
                'slug'              =>'job', 
                'with_front'        => true 
            )
        )
    );
}
/*** Custom taxonomy ***/
add_action( 'init', 'restly_custom_post_taxonomy');
function restly_custom_post_taxonomy() {
    register_taxonomy(
        'restly_portfolio_cat',
        'restly_portfolio',                  
            array(
                'label'                 => esc_html__('Portfolio Category', 'restlycore'),
                'query_var'             => true,
                'hierarchical'          => true,
                'public'                => true,
                'show_ui'               => true,
                'show_admin_column'     => false,
                'show_in_nav_menus'     => true,
                'show_in_rest'          => true,
                'show_tagcloud'         => true,
                'rewrite'               => array(
                    'slug'              => 'portfolio-category', 
                    'with_front'        => true 
                )
            )
    );
}