<?php
/**
 * Single Product tabs
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
$i = 0;

if ( ! empty( $tabs ) ) : ?>

  <nav>
    <div class="nav nav-tabs" id="woocommerce_product_tabs" role="tablist">

      <?php foreach ( $tabs as $key => $tab ) : ?>

        <a class="nav-item nav-link <?= esc_attr( $key ); ?>_tab" id="nav-<?= esc_attr( $key ); ?>-tab" data-toggle="tab" href="#nav-<?= esc_attr( $key ); ?>" role="tab" aria-controls="nav-<?= esc_attr( $key ); ?>" aria-selected="true">
          <?= apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
        </a>

      <?php endforeach; ?>

    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">

    <?php foreach ( $tabs as $key => $tab ) : ?>

      <div class="tab-pane fade" id="nav-<?= esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="nav-<?= esc_attr( $key ); ?>-tab">
        <?php if ( isset( $tab['callback'] ) ) call_user_func( $tab['callback'], $key, $tab ); ?>
      </div>

    <?php endforeach; ?>

  </div>

<?php endif; ?>
