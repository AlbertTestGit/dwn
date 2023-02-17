<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>
	<div class="woo-single-item-warpper">
		<div class="product-item mb-40">
			<div class="product-img">
				<?php the_post_thumbnail( 'restly-woo-medium', array( 'class' => 'img-fluid' ) ); ?>
				<?php woocommerce_show_product_loop_sale_flash(); ?>
				<div class="product-overlay">
					<div class="product-content">
						<?php woocommerce_template_loop_add_to_cart(); ?>
					</div>
				</div>
			</div>
			<div class="product-info">
				<div class="product-holder">
					<a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_title(); ?></a>
					<div class="prodcut-grid-rating"><?php woocommerce_template_loop_rating(); ?></div>
					<div class="prodcut-list-price"><?php woocommerce_template_loop_price(); ?></div>
					<div class="prodcut-list-rating"><?php woocommerce_template_loop_rating(); ?> </div>
				</div>
				<div class="prodcut-grid-price"><?php woocommerce_template_loop_price(); ?> </div>
				<div class="product-list-dec"><?php echo wp_trim_words( get_the_content(), 30 ); ?></p></div>
				<div class="product-overlay">
					<div class="product-content">
						<?php woocommerce_template_loop_add_to_cart(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</li>
