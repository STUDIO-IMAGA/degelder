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
      <div class="col-12 col-md-7 col-xl-6 mb-4">
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
            <div class="shopping-bg">
              <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 369.5 45.9" width="369" height="46"><path d="m0 45.9c122.7-4.9 245.6-6 368.4-2.6 1.1-13.9 1.3-28 0.7-41.9-27.2-0.3-54.4-0.6-81.6-0.8-27.2-0.2-54.4-0.3-81.6-0.4-27.3-0.1-54.6-0.1-82 0-27.2 0.1-54.4 0.2-81.6 0.4-6.8 0-13.6 0.1-20.4 0.2-3.4 0-6.8 0.1-10.2 0.1-2.3 0-6.8-0.9-8.8 0.4-3.5 2.2-1.4 11.7-1.4 15.2 0 6.7-0.3 13.5-0.8 20.2-0.1 0.8-0.6 9.4-0.8 9.4z" fill="#a4d0a3"/></svg>
            </div>
            <h5>Openingstijden boerderijwinkel</h5>
            <div class="row pb-2">
              <div class="col-4 col-xl-3 pr-0">
                Ma
              </div>
              <div class="col-7 col-xl-9 px-0">
                <?=get_option('woocommerce_store_shoppinghours_monday');?>
              </div>
            </div>
            <div class="row align-items-center pb-2">
              <div class="col-4 col-xl-3 pr-0">
                Di t/m vr
              </div>
              <div class="col-7 col-xl-9 px-0">
                <?=get_option('woocommerce_store_shoppinghours_tue_vr');?>
              </div>
            </div>
            <div class="row pb-2">
              <div class="col-4 col-xl-3 pr-0">
                Za
              </div>
              <div class="col-7 col-xl-9 px-0">
                <?=get_option('woocommerce_store_shoppinghours_saturday');?>
              </div>
            </div>
            <div class="row pb-2">
              <div class="col-12">
                Gesloten op zon- en feestdagen
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-5 col-xl-6 mb-4">
        <h5>Stuur ons een bericht</h5>
        <?= do_shortcode('[contact-form-7 id="571"]');?>
      </div>
    </div>
  </div>
</section>
