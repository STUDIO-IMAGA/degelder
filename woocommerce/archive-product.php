<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="bg-yellow-light">
  <div class="container">
    <div class="row py-3">
      <div class="col-12 text-center">
        <h2><?= get_option( 'woocommerce_store_shop_title' ); ?></h2>
        <p><i><?= get_option('woocommerce_store_shop_description'); ?></i></p>
      </div>
    </div>
  </div>
</section>

<? get_template_part('templates/components/breadcrumbs'); ?>

<section>
  <div class="container">
    <div class="row pt-2">
      <div class="woocommerce-sidebar col-12 col-lg-3">
        <? dynamic_sidebar( 'woocommerce-sidebar' ); ?>
      </div>
      <div class="woocommerce-products col-12 col-lg-9">
        <?
        if ( woocommerce_product_loop() ):

          woocommerce_product_loop_start();

          if ( wc_get_loop_prop( 'total' ) ):
            while ( have_posts() ):
              the_post();

              do_action( 'woocommerce_shop_loop' );

              wc_get_template_part( 'content', 'product' );
            endwhile;
          endif;

          woocommerce_product_loop_end();

          // pagination
          do_action( 'woocommerce_after_shop_loop' );

        else:

          do_action( 'woocommerce_no_products_found' );

        endif;

        do_action( 'woocommerce_after_main_content' );
        ?>
      </div>
    </div>
  </div>
</section>
