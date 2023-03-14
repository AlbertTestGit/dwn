<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function restly_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'restly' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	if ( class_exists( 'WooCommerce' ) ) {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Shop Sidebar', 'restly' ),
			'id'            => 'restly-shop',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="woo-widgets widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);}
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'restly' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'restly' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'restly' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Four', 'restly' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'restly' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	
	$Gwidgets = restly_options('restly_Gwidget_grups');
	if( restly_options('restly_Gwidget_enable') == true && !empty($Gwidgets) ){
		$count= 4;
		foreach($Gwidgets as $Gwidget){
			$count++;
			$unique = rand(1241, 3256);
			register_sidebar(
				array(
					'name'          => esc_html($Gwidget['restly_Gwidget_name']),
					'id'            => 'footer-'.$count.'',
					'description'   => esc_html($Gwidget['restly_Gwidget_dec']),
					'before_widget' => wp_kses_post($Gwidget['restly_Gwidget_before']),
					'after_widget'  => wp_kses_post($Gwidget['restly_Gwidget_after']),
					'before_title'  => wp_kses_post($Gwidget['restly_Gwidget_title_before']),
					'after_title'   => wp_kses_post($Gwidget['restly_Gwidget_title_after']),
				),
			);
		}
	}

}
add_action( 'widgets_init', 'restly_widgets_init' );
?>