<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>
<? global $woocommerce; ?>

<header class="bg-white navbar-container">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation', 0, 1, "ml-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid align-items-start">

      <?= Navigation\toggler( '.navbar-toggle' ); ?>

      <?= Navigation\brand( Assets\asset_path("images/brand.png"), 290 ); ?>

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1, "mr-auto nav navbar-nav"); ?>

      <div class="navbar-text">
        <a class="winkelmandje" href="<?= $woocommerce->cart->get_cart_url(); ?>">
          <span class="winkelmandje-icon"></span>
          <span class="winkelmandje-prijs">
            <?= $woocommerce->cart->get_cart_subtotal(); ?>
          </span>
        </a>
      </div>

    </div>
  </nav>
</header>