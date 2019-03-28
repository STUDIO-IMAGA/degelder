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

use IMAGA\Theme\Assets;
?>

<section class="description bg-yellow-light">
  <div class="container">
    <div class="row justify-content-center py-3">
      <div class="col-12 col-mg-8 text-center">
        <h2><?= get_option( 'woocommerce_store_shop_title' ); ?></h2>
        <p><i><?= get_option('woocommerce_store_shop_description'); ?></i></p>
      </div>
    </div>
  </div>
</section>

<? get_template_part('templates/components/breadcrumbs'); ?>

<section class="sidebar">
  <div class="container">
    <div class="row pt-2">

      <div class="col-12 col-lg-3">
        <div class="woocommerce-sidebar sticky-top">

          <? dynamic_sidebar( 'woocommerce-sidebar' ); ?>

        </div>
      </div>

      <div class="woocommerce-products col-12 col-lg-9">

        <? if ( woocommerce_product_loop() ): ?>

          <? woocommerce_product_loop_start(); ?>

          <? if ( wc_get_loop_prop( 'total' ) ): ?>
            <? while ( have_posts() ): the_post(); ?>

              <? do_action( 'woocommerce_shop_loop' ); ?>

              <div class="product col-12 col-sm-6 col-md-4">

                <? wc_get_template_part( 'content', 'product' ); ?>

              </div>

            <? endwhile; ?>
          <? endif; ?>

          <? woocommerce_product_loop_end(); ?>

          <? do_action( 'woocommerce_after_shop_loop' ); ?>

        <? else: ?>

          <? do_action( 'woocommerce_no_products_found' ); ?>

        <? endif; ?>

        <? do_action( 'woocommerce_after_main_content' ); ?>
      </div>
    </div>
  </div>
</section>

<section class="promotion">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 shipping">
        <div class="row align-items-center">
          <div class="col-4 col-lg-3 pr-0 pr-lg-2 text-right">
            <img class="img-fluid" src="<?= Assets\asset_path('images/gratis-verzending.svg'); ?>" alt="Shop Promo">
          </div>
          <div class="col-8 col-lg-7 pl-lg-0">
            <span class="h3"><?= get_option('woocommerce_store_shop_shipping_promotion'); ?></span>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 shop">
        <div class="shop-bg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 221 168" preserveAspectRatio="none"><path d="M11,154.74C10.77,154,4.9,108.23,6.68,65L8.47,21.86s40.63-5.37,76.15-5.37,78.45,6.39,97.87,5.11,25-1.53,25-.76a62.13,62.13,0,0,0,3.32,23.76c4.34,12.78,2.81,45.74,2.81,52.64s3.83,50.34,7.67,55.2c0,0-11.25,1.53-18.4-1.54S11,154.74,11,154.74Z"></path></svg>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 pr-2 text-center text-lg-right pt-3">
            <img class="img-fluid" src="<?= get_option('woocommerce_store_shop_promotion_image'); ?>" alt="Shop Promo">
          </div>
          <div class="col-12 col-sm-6 pl-lg-0 pr-md-5 pt-3">
            <div>
              <?= get_option('woocommerce_store_shop_promotion'); ?>
            </div>
            <a href="<?= get_option('woocommerce_store_shop_promotion_link_url'); ?>"><?= get_option('woocommerce_store_shop_promotion_link_label'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
