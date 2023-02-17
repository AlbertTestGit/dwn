<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restly
 */
if(is_page() || is_singular('post') || is_singular('restly_portfolio') || is_singular('restly_team') && get_post_meta( $post->ID, 'restly_metabox', true)) {
	$restlyMeta = get_post_meta($post->ID, 'restly_metabox', true);
} else {
	$restlyMeta = array();
}
$restly_footer_styles = restly_options('restly_footer_styles');
$restly_enable_top_to_bottom = restly_options('restly_enable_top_to_bottom', true);
$restly_enable_ttb_icon = restly_options('restly_enable_ttb_icon','fa fa-angle-up');
$restly_ft1_top_enable = restly_options('restly_ft1_top_enable');
if (is_array($restlyMeta) && array_key_exists('restly_meta_footer_styles', $restlyMeta) && array_key_exists('restly_meta_footer_style_shwo', $restlyMeta) && $restlyMeta['restly_meta_footer_style_shwo'] == true && get_post_meta($post->ID, 'restly_metabox', true) ) {
	$selectedFooter = $restlyMeta['restly_meta_footer_styles'];
}elseif (!empty($restly_footer_styles) && class_exists( 'CSF' )) {
	$selectedFooter = restly_options('restly_footer_styles');
}else {
	$selectedFooter = 'one';
} 
if ( is_active_sidebar( 'footer-1') || class_exists( 'CSF' ) ){
	$active_widgets = 'widget-yes';
}else{
	$active_widgets ='widget-no';
}


if (is_array($restlyMeta) && array_key_exists('restly_meta_ft_widgets', $restlyMeta) && get_post_meta($post->ID, 'restly_metabox', true) && array_key_exists('restly_meta_ft_widgets_show', $restlyMeta) && $restlyMeta['restly_meta_ft_widgets_show'] == true ) {
	$footer_meta_widgets = $restlyMeta['restly_meta_ft_widgets'];
	$ft_wshow = $restlyMeta['restly_meta_ft_widgets_show'];
}else{
	$footer_meta_widgets = '';
	$ft_wshow = '';
}

?>
	<footer id="colophon" class="site-footer footer-<?php echo esc_attr($selectedFooter); ?>">
		<div class="footer-widgets-area <?php echo esc_attr($active_widgets); ?>">

			<?php 
				if($selectedFooter == 'two' && $restly_ft1_top_enable == true){
					get_template_part('inc/footer/footer','top');
				}elseif($selectedFooter == 'three'){
					echo '<div class="footer-top-area"></div>';
				}
				if($ft_wshow == true && !empty($footer_meta_widgets)){
					get_template_part('inc/footer/ftpage','widgets');
				}else{
					get_template_part('inc/footer/footer','widgets');
				}
				if($selectedFooter !== 'one' && $selectedFooter !== 'four' && $selectedFooter !== 'five'  && $selectedFooter !== 'six' && $selectedFooter !== 'seven'){
					get_template_part('inc/footer/copyright');
				} 
				if($selectedFooter === 'six'){
					get_template_part('inc/footer/copyright','six');
				}
				if($selectedFooter == 'five' ){
					get_template_part('inc/footer/copyright2');
				}
			?>
		</div>
		<?php 
			if($selectedFooter == 'one' || $selectedFooter == 'four' ){
				get_template_part('inc/footer/copyright');
			}
			if($selectedFooter == 'seven' ){
				get_template_part('inc/footer/copyright3');
			}
		?>
	</footer><!-- #colophon -->
	<?php if($restly_enable_top_to_bottom == true  && $selectedFooter != 'six' ) : ?>
		<div class="to-top" id="back-top"><i class="<?php echo esc_attr($restly_enable_ttb_icon); ?>"></i></div>
	<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>