<?php
/**
 * The template for displaying product content within loops
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

do_action( 'woocommerce_before_shop_loop_item' );

do_action( 'woocommerce_before_shop_loop_item_title' );

do_action( 'woocommerce_shop_loop_item_title' );

do_action( 'woocommerce_after_shop_loop_item_title' );

do_action( 'woocommerce_after_shop_loop_item' );
?>
