<?
/**
* Template Name: Winkelmand
*/
?>

<section class="template-cart">
  <div class="container">
    <div class="row pt-6">
      <div class="col-12">
        <h1><? the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?= do_shortcode('[woocommerce_cart]'); ?>
      </div>
    </div>
  </div>
</section>
