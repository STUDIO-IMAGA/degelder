<?php
/**
 * The Template for displaying all single products
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

do_action( 'woocommerce_before_main_content' );

?>

<? while ( have_posts() ) : the_post(); ?>

  <? wc_get_template_part( 'content', 'single-product' ); ?>

<? endwhile; // end of the loop. ?>

<? do_action( 'woocommerce_after_main_content' ); ?>
