<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<?php 
	 $restly_enable_preloader = restly_options('restly_enable_preloader', true);
do_action( 'wp_body_open' ); ?>
<div id="page" class="hfeed site">
	<?php if($restly_enable_preloader == true ) { ?>
    <div class="preloader-area">
        <div class="theme-loader"></div>
    </div>
	<?php } ?>
<?php do_action( 'tp_header' ); ?>