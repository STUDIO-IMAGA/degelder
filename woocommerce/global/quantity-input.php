<?php
/**
 * Product quantity inputs
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* translators: %s: Quantity. */
	$labelledby = ! empty( $args['product_name'] ) ? sprintf( __( '%s quantity', 'woocommerce' ), strip_tags( $args['product_name'] ) ) : '';
	?>
	<div class="quantity">
    <label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></label>
    <button class='quantity-minus' data-field-id='<?php echo esc_attr( $input_id ); ?>'>-</button><div class="label-wrapper">
      <span id="quantity-label"><?php echo esc_attr( $input_value ); ?></span>
      <input
      type="hidden"
      id="<?php echo esc_attr( $input_id ); ?>"
      class="quantity-label"
      step="<?php echo esc_attr( $step ); ?>"
      min="<?php echo esc_attr( $min_value ); ?>"
      max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
      name="<?php echo esc_attr( $input_name ); ?>"
      value="<?php echo esc_attr( $input_value ); ?>"
      title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
      size="4"
      pattern="<?php echo esc_attr( $pattern ); ?>"
      inputmode="<?php echo esc_attr( $inputmode ); ?>"
      aria-labelledby="<?php echo esc_attr( $labelledby ); ?>" />
    </div><button class='quantity-plus' data-field-id='<?php echo esc_attr( $input_id ); ?>'>+</button>
	</div>
	<?php
}
?>
