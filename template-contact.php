<?
/**
* Template Name: Contact
*/

use IMAGA\Theme\Extras;

$address = get_option( 'woocommerce_store_address' );
$postcode = get_option( 'woocommerce_store_postcode' );
$city = get_option( 'woocommerce_store_city' );
$phone = get_option( 'woocommerce_store_phone' );
$email = get_option( 'woocommerce_store_email' );
$kvk = get_option( 'woocommerce_store_kvk' );
$iban = get_option( 'woocommerce_store_iban' );

$full_address = str_replace(' ','+', $address.'+'.$postcode.'+'.$city);

?>

<? get_template_part('templates/components/breadcrumbs'); ?>

<section class="template-contact">
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 col-xl-6 mb-4">
        <div class="contact-info">
          <h5><? the_title(); ?></h5>
          <h5 class="text-brown-400 mb-3"><i>Adressgegevens</i></h5>
          <p>
            <a href="https://www.google.com/maps/dir/8932+Leeuwarden/<?=$full_address;?>" class="text-body" target="_blank">
              <?=$address;?><br/>
              <?=$postcode;?> <?=$city;?>
            </a></br>
            <a href="tel:<?=$phone;?>" class="text-body">Tel.: <?=$phone;?></a></br>
            <a href="mailto:<?=$email;?>" class="text-body"><?=$email;?></a></br>
            KvK: <?= $kvk; ?></br>
            IBAN: <?= $iban; ?>
          </p>
          <div class="company-artwork"></div>
          <div class="shoppinghours mt-6">
            <div class="shopping-bg"><svg preserveAspectRatio="none" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 221 168"><path d="M5.56,151.84S1,110.44,2.49,75.43,5.56,25.35,5.56,25.35s11.5,1.79,41.14,0,165.08-6.14,165.08-6.14,2.55,6.14,4.34,46.51,2.81,86.12,2.81,86.12S12.2,151.33,5.56,151.84Z"/></svg></div>
            <h5>Openingstijden boerderijwinkel</h5>
            <div class="row pb-2">
              <div class="col-4 col-xl-2 pr-0">
                Ma
              </div>
              <div class="col-7 col-xl-8 px-0">
                <?=get_option('woocommerce_store_shoppinghours_monday');?>
              </div>
            </div>
            <div class="row align-items-center pb-2">
              <div class="col-4 col-xl-2 pr-0">
                Di t/m vr
              </div>
              <div class="col-7 col-xl-8 px-0">
                <?=get_option('woocommerce_store_shoppinghours_tue_vr');?>
              </div>
            </div>
            <div class="row pb-2">
              <div class="col-4 col-xl-2 pr-0">
                Za
              </div>
              <div class="col-7 col-xl-8 px-0">
                <?=get_option('woocommerce_store_shoppinghours_saturday');?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6 mb-4">
        <h5>Stuur ons een bericht</h5>
        <?= do_shortcode('[contact-form-7 id="571"]');?>
      </div>
    </div>
  </div>
</section>
