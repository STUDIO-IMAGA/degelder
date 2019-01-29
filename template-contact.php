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
    <div class="row">
      <div class="col-6">

        <h5><? the_title(); ?></h5>
        <h5 class="text-brown"><i>Adressgegevens</i></h5>
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

        <div class="shoppinghours">
          <h5>Openingstijden boerderijwinkel</h5>
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

      </div>
      <div class="col-6">
        <h5>Stuur ons een bericht</h5>
        <?= do_shortcode('[contact-form-7 id="571" title="Contactformulier"]');?>
      </div>
    </div>
  </div>
</section>
