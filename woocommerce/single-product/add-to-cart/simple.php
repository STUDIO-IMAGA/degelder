<?php
/**
 * Simple product add to cart
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

  <div class="product-add-to-cart">

    <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

    <form class="product-cart cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>

      <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>


      <?php
      do_action( 'woocommerce_before_add_to_cart_quantity' );

      woocommerce_quantity_input( array(
        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
        'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
      ) );

      do_action( 'woocommerce_after_add_to_cart_quantity' );
      ?>

      <input type='button' value='-' class='product-quantity-minus' field='quantity'/>

      <span class="product-quantity-label">1</span>

      <input type='button' value='+' class='product-quantity-plus' field='quantity'/>

      <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-lg btn-yellow add-to-cart-button">
        Toevoegen aan winkelmand
      </button>

      <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    </form>
  </div>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
