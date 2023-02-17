<?php
/**
 * The template for displaying authors pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Restly
 */

get_header();
$restly_authors_banner = restly_options('restly_authors_banner', true);
$restly_breadcrumb_select_html = restly_options('restly_breadcrumb_select_html', 'h2');
$restly_authorsLayout = restly_options('restly_authors_layout', 'list');
?>
	<?php if($restly_authors_banner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt">
				<?php the_archive_title( '<'.esc_attr($restly_breadcrumb_select_html).' class="archive-title brea-title">', '</'.esc_attr($restly_breadcrumb_select_html).'>' ); ?>
				<div class="bre-sub">
				<?php if(function_exists('bcn_display')){
					bcn_display();
				}?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<main id="primary" class="site-main content-area">
		<div class="container page-layout <?php echo esc_attr($restly_authorsLayout); ?>">
			<?php
			get_template_part( 'template-parts/blog/post-sidebar-author' );
			?>
		</div>
	</main><!-- #main -->
<?php get_footer();
