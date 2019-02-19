<?php
/**
 * Related Products
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

  <div class="row pt-8">
    <div class="col-12">
      <h2 class="mb-5"><?php esc_html_e( 'Ook lekker', 'woocommerce' ); ?>:</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-12">

      <?php woocommerce_product_loop_start(); ?>

      <?php foreach ( $related_products as $related_product ) : ?>
        <div class="product col-12 col-md-6 col-lg-3">

          <? $post_object = get_post( $related_product->get_id() ); ?>

          <? setup_postdata( $GLOBALS['post'] =& $post_object ); ?>

          <? wc_get_template_part( 'content', 'product' ); ?>

        </div>

      <?php endforeach; ?>

      <?php woocommerce_product_loop_end(); ?>

    </div>
  </div>



<?php endif;

wp_reset_postdata();
