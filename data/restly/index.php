<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Restly
 */

get_header();
$restly_blogc_title      = restly_options( 'restly_blog_title' );
$restly_blog_home_title      = restly_options( 'restly_blog_home_title' );
$restly_blog_home_stitle      = restly_options( 'restly_blog_home_stitle' );
$restly_breadcrumb_select_html = restly_options('restly_breadcrumb_select_html', 'h2');
$restly_banner_enable    = restly_options( 'restly_blog_banner_enable', true );
$restly_blog_layout      = restly_options( 'restly_blog_layout', 'right-sidebar' );
if($restly_blog_layout == 'grid'){
	$restly_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$restly_sidebar_bg = 'sidebar-bg-main';
}
?>
<?php if ( $restly_banner_enable == true ) : ?>
<div class="breadcroumb-area">
	<div class="container">
		<div class="breadcroumn-contnt">
		<<?php echo esc_attr($restly_breadcrumb_select_html); ?> class="brea-title"><?php echo esc_html( $restly_blogc_title ); ?></<?php echo esc_attr($restly_breadcrumb_select_html); ?>>
			<div class="bre-sub">
				<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html($restly_blog_home_title); ?></a> <i class="fas fa-minus"></i></span>
				<span><span><?php echo esc_html($restly_blog_home_stitle); ?></span></span>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<main id="primary" class="site-main content-area  <?php echo esc_attr($restly_sidebar_bg); ?>">
	<div class="container page-layout <?php echo esc_attr($restly_blog_layout); ?>">
		<?php
            if ( $restly_blog_layout == 'grid' ) {
                get_template_part( 'template-parts/blog/post-grid' );
            } else {
                get_template_part( 'template-parts/blog/post-sidebar' );
            }?>
	</div>
</main>
<?php
get_footer();
