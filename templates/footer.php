<?

use IMAGA\Theme\Navigation;

$address = get_option( 'woocommerce_store_address' );
$postcode = get_option( 'woocommerce_store_postcode' );
$city = get_option( 'woocommerce_store_city' );
$phone = get_option( 'woocommerce_store_phone' );
$email = get_option( 'woocommerce_store_email' );

$full_address = str_replace(' ','+', $address.'+'.$postcode.'+'.$city);

?>




<footer class="footer">
  <div class="container pt-7">
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
            <a class="text-body" href="https://www.google.com/maps/dir/8932+Leeuwarden/<?=$full_address;?>" target="_blank">
              <?=$address;?><br/>
              <?=$postcode;?> <?=$city;?>
            </a>
          </li>
          <li>
            <a class="text-body" href="tel:<?=$phone;?>"><?=$phone;?></a>
          </li>
          <li>
            <a class="text-body" href="mailto:<?=$email;?>"><?=$email;?></a>
          </li>
        </ul>
      </div>
      <div class="col col-xl-4">
        <h6>Wij zijn lid van</h6>
        <div>
          <img class="img-fluid img-round mr-3" src="https://placehold.it/71x71"/>
          <img class="img-fluid img-round mr-3" src="https://placehold.it/71x71"/>
          <img class="img-fluid img-round mr-3" src="https://placehold.it/71x71"/>
          <img class="img-fluid img-round" src="https://placehold.it/71x71"/>
        </div>
      </div>
    </div>
  </div>
</footer>
