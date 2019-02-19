<?php
/**
 * Additional Information tab
 *
 * @see           https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<?php //do_action( 'woocommerce_product_additional_information', $product ); ?>

<? if( have_rows('lists') ): ?>
  <? while( have_rows('lists') ): the_row(); ?>
    <div class="mb-4">
      <h4><? the_sub_field('title'); ?></h4>

      <? if( have_rows('items') ): ?>
        <div class="table-responsive">
          <table class="table">
            <? while( have_rows('items') ): the_row(); ?>
              <tr>
                <td>
                  <? the_sub_field('label'); ?>
                </td>
                <td>
                  <? the_sub_field('value'); ?>
                </td>
              </tr>
            <? endwhile;?>
          </table>
        </div>
      <? endif;?>
    </div>
  <? endwhile;?>
<? endif;?>
