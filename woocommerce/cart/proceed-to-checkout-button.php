<?php
/**
 * Proceed to checkout button
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-lg btn-yellow checkout-button button alt wc-forward">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</a>
