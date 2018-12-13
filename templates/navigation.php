<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>
<? global $woocommerce; ?>

<header id="navigation" class="bg-white navbar-container fixed-top">

  <nav id="nav-top" class="navbar navbar-expand navbar-light">
    <div class="container">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation', 0, 1, "ml-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <?= Navigation\toggler( 'primary_navigation' ); ?>

      <?= Navigation\brand( Assets\asset_path("images/de-gelder-kaasboerderij.svg"), 290 ); ?>

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
<div id="header-spacer"></div>
