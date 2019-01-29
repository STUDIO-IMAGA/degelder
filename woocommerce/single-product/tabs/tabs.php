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

if ( ! empty( $tabs ) ) : ?>

  <nav>
    <ul class="nav nav-tabs" id="woocommerce_product_tabs" role="tablist">

      <? $i = 0; ?>
      <?php foreach ( $tabs as $key => $tab ) : $i++; ?>

        <li class="nav-item">
          <a class="nav-link <?= esc_attr( $key ); ?>_tab <?= ($i == 1)?'active':'';?>" id="nav-<?= esc_attr( $key ); ?>-tab" data-toggle="tab" href="#nav-<?= esc_attr( $key ); ?>-content" role="tab" aria-controls="nav-<?= esc_attr( $key ); ?>-content" aria-selected="true">

            <?= apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>

          </a>
        </li>

      <?php endforeach; ?>

    </ul>
  </nav>

  <div class="tab-content" id="woocommerce_product_panels">
    <? $i = 0; ?>
    <?php foreach ( $tabs as $key => $tab ) : $i++;?>

      <div id="nav-<?= esc_attr( $key ); ?>-content" class="tab-pane fade <?= ($i == 1)?'show active':'';?>" role="tabpanel" aria-labelledby="nav-<?= esc_attr( $key ); ?>-tab">

        <?php if ( isset( $tab['callback'] ) ) call_user_func( $tab['callback'], $key, $tab ); ?>

      </div>

    <?php endforeach; ?>

  </div>

<?php endif; ?>
