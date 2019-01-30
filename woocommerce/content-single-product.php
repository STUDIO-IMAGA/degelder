<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<? get_template_part('templates/components/breadcrumbs'); ?>

<section id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
  <div class="container">

    <div class="row pt-5 pb-6 align-items-end">
      <div class="col-12 col-lg-6">
        <? do_action( 'woocommerce_before_single_product_summary' ); ?>
      </div>

      <div class="col-12 col-lg-6 py-lg-6">

        <? woocommerce_template_single_title(); ?>

        <? woocommerce_template_single_price(); ?>

        <? woocommerce_template_single_excerpt(); ?>

        <? woocommerce_template_single_add_to_cart(); ?>

      </div>
    </div>

    <div class="row">
      <div class="col-12">

        <? woocommerce_output_product_data_tabs(); ?>

      </div>
    </div>

    <div class="row">
      <div class="col-12">

        <? woocommerce_output_related_products(); ?>

      </div>
    </div>

  </div>
</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>
