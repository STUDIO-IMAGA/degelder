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
    <div class="bosjes-1"></div>
    <div class="bosjes-2"></div>

    <div class="row">
      <div class="col col-xl-3">
        <h6>Openingstijden boerderijwinkel</h6>
        <div class="row">
          <div class="col-4">
            Ma
          </div>
          <div class="col-8">
            <?=get_option('woocommerce_store_shoppinghours_monday');?>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            Di t/m vr
          </div>
          <div class="col-8">
            <?=get_option('woocommerce_store_shoppinghours_tue_vr');?>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            Za
          </div>
          <div class="col-8">
            <?=get_option('woocommerce_store_shoppinghours_saturday');?>
          </div>
        </div>
      </div>
      <div class="col col-xl-2">
        <h6>Klantenservice</h6>
        <?= Navigation\navigation_list('tertiary_navigation','tertiary_navigation','list-unstyled');?>
      </div>
      <div class="col col-xl-2">
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
      <div class="col col-xl-4">
        <h6>Wij zijn lid van</h6>
        <div>
          <img class="img-fluid img-round mr-3" src="<?= Assets\asset_path('images/upload/boerenkaas.png');?>"/>
          <img class="img-fluid img-round mr-3" src="<?= Assets\asset_path('images/upload/boerderij-zuivel.png');?>"/>
          <img class="img-fluid img-round mr-3" src="<?= Assets\asset_path('images/upload/kaas-van-de-boerderij.png');?>"/>
          <img class="img-fluid img-round" src="<?= Assets\asset_path('images/upload/kb.png');?>"/>
        </div>
      </div>
    </div>
  </div>
</footer>
