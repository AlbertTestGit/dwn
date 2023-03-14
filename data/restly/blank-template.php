<?php
/**
*Template Name: Blank Template 
*/

get_header();
if(get_post_meta( get_the_ID(), 'restly_metabox', true)) {
    $restly_commonMeta = get_post_meta( get_the_ID(), 'restly_metabox', true );
} else {
    $restly_commonMeta = array();
}
if(array_key_exists('restly_meta_enable_banner', $restly_commonMeta)){
    $restly_postBanner = $restly_commonMeta['restly_meta_enable_banner'];
}else{
    $restly_postBanner = true;
}

if(array_key_exists('restly_meta_custom_title', $restly_commonMeta)){
    $restly_customTitle = $restly_commonMeta['restly_meta_custom_title'];
}else{
    $restly_customTitle = '';
}
$restly_breadcrumb_select_html = restly_options('restly_breadcrumb_select_html', 'h2');
?>
<?php if($restly_postBanner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt">
				<<?php echo esc_attr($restly_breadcrumb_select_html); ?> class="brea-title">
				<?php 
				if(!empty($restly_customTitle)){
					echo esc_html($restly_customTitle);
				}else{
					the_title();
				}
				?>
				</<?php echo esc_attr($restly_breadcrumb_select_html); ?>>
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
		<?php the_content(); ?>
	</main><!-- #main -->
<?php get_footer();
