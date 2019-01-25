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

    <div class="row">
      <div class="col-12 col-lg-6">
        <?php
      		/**
      		 * Hook: woocommerce_before_single_product_summary.
      		 *
      		 * @hooked woocommerce_show_product_sale_flash - 10
      		 * @hooked woocommerce_show_product_images - 20
      		 */
      		do_action( 'woocommerce_before_single_product_summary' );

      	?>
      </div>
      <div class="col-12 col-lg-6">
        <? woocommerce_template_single_title(); ?>

        <? woocommerce_template_single_price(); ?>

        <? woocommerce_template_single_excerpt(); ?>

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
      			// do_action( 'woocommerce_single_product_summary' );
      		?>
      </div>
    </div>

    <div class="row">
      <div class="col-12">

        <? woocommerce_output_product_data_tabs(); ?>

        <?php
          /**
           * Hook: woocommerce_after_single_product_summary.
           *
           * @hooked woocommerce_output_product_data_tabs - 10
           * @hooked woocommerce_upsell_display - 15
           * @hooked woocommerce_output_related_products - 20
           */
          //do_action( 'woocommerce_after_single_product_summary' );
        ?>
      </div>
    </div>

  </div>
</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>
