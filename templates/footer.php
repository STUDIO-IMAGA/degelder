<?

use IMAGA\Theme\Navigation;
use IMAGA\Theme\Assets;

$address = get_option( 'woocommerce_store_address' );
$postcode = get_option( 'woocommerce_store_postcode' );
$city = get_option( 'woocommerce_store_city' );
$phone = get_option( 'woocommerce_store_phone' );
$email = get_option( 'woocommerce_store_email' );

$full_address = str_replace(' ','+', $address.'+'.$postcode.'+'.$city);

?>




<footer class="footer">
  <div class="container pt-7">
    <div class="trekker"></div>
    <div class="kaasboerderij"></div>
    <div class="bosjes-links"></div>
    <div class="bosjes-rechts"></div>
    <div class="boom-rechts"></div>

    <div class="row">

      <div class="col-md-5 col-xl-3 d-none d-md-block">
        <h6>Openingstijden boerderijwinkel</h6>
        <div class="row">
          <div class="col-5 col-xl-4">
            Ma
          </div>
          <div class="col-7 col-xl-8">
            <?=get_option('woocommerce_store_shoppinghours_monday');?>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-5 col-xl-4 pr-0">
            Di t/m vr
          </div>
          <div class="col-7 col-xl-8">
            <?=get_option('woocommerce_store_shoppinghours_tue_vr');?>
          </div>
        </div>
        <div class="row">
          <div class="col-5 col-xl-4">
            Za
          </div>
          <div class="col-7 col-xl-8">
            <?=get_option('woocommerce_store_shoppinghours_saturday');?>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xl-3 d-none d-md-block">
        <h6>Klantenservice</h6>
        <?= Navigation\navigation_list('tertiary_navigation','tertiary_navigation','list-unstyled');?>
      </div>

      <div class="col-12 col-md-3 col-xl-3">
        <h6>Contactgegevens</h6>
        <ul class="list-unstyled">
          <li>
            <a href="https://www.google.com/maps/dir/8932+Leeuwarden/<?=$full_address;?>" target="_blank">
              <?=$address;?><br/>
              <?=$postcode;?> <?=$city;?>
            </a>
          </li>
          <li>
            <a href="tel:<?=$phone;?>"><?=$phone;?></a>
          </li>
          <li>
            <a href="mailto:<?=$email;?>"><?=$email;?></a>
          </li>
        </ul>
      </div>

      <div class="col-12 col-md-5 col-xl-3">
        <h6>Wij zijn lid van</h6>
        <? get_template_part('templates/components/quality-marks'); ?>
      </div>

    </div>
  </div>
</footer>
