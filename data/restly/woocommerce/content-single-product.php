<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<?php $attachment_ids = $product->get_gallery_image_ids();
			if(!empty($attachment_ids)) : ?>
			<div class="woo-product-big-img">
				<?php foreach ($attachment_ids as $woo_pro_large) : ?>
				<div class="woo-spimg">
					<a href="<?php echo wp_get_attachment_image_url($woo_pro_large, 'large'); ?>">
						<img src="<?php echo wp_get_attachment_image_url($woo_pro_large, 'large'); ?>" alt="<?php the_title(); ?>">
					</a>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="woo-product-small-img">
				<?php foreach ($attachment_ids as $woo_pro_small) : ?>
				<div class="woo-sspimg">
					<img src="<?php echo wp_get_attachment_image_url($woo_pro_small, 'thumbnail'); ?>" alt="<?php the_title(); ?>">
				</div>
				<?php endforeach; ?>
			</div>
			<?php else : the_post_thumbnail('large'); endif; ?>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="woo-single-summery">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div>
		</div>
	</div>
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
