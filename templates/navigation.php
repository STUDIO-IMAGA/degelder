<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Navigation; ?>
<? global $woocommerce; ?>

<header id="navigation" class="bg-white navbar-container fixed-top">

  <nav id="nav-top" class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <?= Navigation\navigation( 'secondary_navigation', 'secondary_navigation', 0, 1, "ml-auto nav navbar-nav"); ?>
    </div>
  </nav>

  <nav id="nav-main" class="navbar navbar-expand-lg navbar-light">
    <div class="container">

      <?= Navigation\toggler( '#nav-mobile' ); ?>

      <?= Navigation\brand( Assets\asset_path("images/de-gelder-kaasboerderij.svg"), 290 ); ?>

      <?= Navigation\navigation( 'primary_navigation', 'primary_navigation' , 0, 1, "mr-auto nav navbar-nav", "collapse navbar-collapse navbar-toggle"); ?>

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

  <div id="nav-mobile" class="collapse d-lg-none">
    <?= Navigation\navigation( 'primary_navigation', 'primary_mobile' , 0, 1, "mr-auto nav navbar-nav", ""); ?>
    <?= Navigation\navigation( 'secondary_navigation', 'secondary_mobile', 0, 1, "ml-auto nav navbar-nav", ""); ?>
    <div id="tertiary_mobile">
      <?
      $phone = get_option( 'woocommerce_store_phone' );
      $email = get_option( 'woocommerce_store_email' );

      ?>
      <div class="phone">
        <a href="tel:<?=$phone;?>" rel="noreferrer" rel="nofollow"><?=$phone;?></a>
      </div>
      <div class="mail">
        <a href="mailto:<?=$email;?>" rel="noreferrer" rel="nofollow"><?=$email;?></a>
      </div>
    </div>
  </div>
</header>
<div id="header-spacer"></div>
