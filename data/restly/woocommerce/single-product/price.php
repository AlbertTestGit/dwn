<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 */
if(get_post_meta( get_the_ID(), 'restly_woometa', true)) {
    $restly_woometa = get_post_meta( get_the_ID(), 'restly_woometa', true );
} else {
    $restly_woometa = array();
}
if(array_key_exists('restly_nft_colle_filedset', $restly_woometa) && !empty($restly_woometa['restly_nft_colle_filedset'])){
    $restly_nft_celle = $restly_woometa['restly_nft_colle_filedset'];
    $restly_celle = $restly_nft_celle['restly_nft_colle_enable'];
}else{
    $restly_nft_celle = '';
    $restly_celle = '';
}

if(array_key_exists('restly_nft_place_bid_grup', $restly_woometa) && !empty($restly_woometa['restly_nft_place_bid_grup'])){
    $restly_nft_bid_group = $restly_woometa['restly_nft_place_bid_grup'];
    $restly_nft_bid = $restly_nft_bid_group['restly_nft_plce_bid_enable'];
}else{
    $restly_nft_bid_group = '';
    $restly_nft_bid = '';
}
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo wp_kses( $product->get_price_html(), 'restly_allowed_html'); ?></p>
<?php if($restly_celle == true || $restly_nft_bid == true ) : ?>
<div class="nft-extranal-info">
	<?php if($restly_celle == true ) : ?>
	<?php if($restly_nft_celle['restly_nft_colle_lebel']){
		echo '<span>'.esc_html($restly_nft_celle['restly_nft_colle_lebel']).'</span>';
	} ?>
	<div class="nft-colle-author">
		<img src="<?php echo esc_url($restly_nft_celle['restly_nft_colle_media']); ?>" alt="<?php the_title(); ?>">
		<a href="<?php echo esc_url($restly_nft_celle['restly_nft_colle_link']['url']); ?>" target="<?php echo esc_attr($restly_nft_celle['restly_nft_colle_link']['target']); ?>"><?php echo esc_html($restly_nft_celle['restly_nft_colle_link']['text']); ?></a>
	</div>
	<?php endif; ?>
	<?php if($restly_nft_bid_group['restly_nft_plce_bid_enable'] == true ) : ?>
	<div class="nft-extra-place-area">
		<a href="<?php echo esc_url($restly_nft_bid_group['restly_nft_place_bid_link']['url']); ?>" class="plac-bid theme-btns gradient-btn-one"><?php echo esc_html($restly_nft_bid_group['restly_nft_plce_bid_text']); ?></a>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>