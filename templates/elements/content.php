<? $toggle = get_sub_field('toggle'); ?>
<? $order = (  $toggle == 'left' ) ? "order-1" : "order-3"; ?>

<? $image = get_sub_field('image'); ?>

<section class="element content">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <? if($image): ?>
        <div class="col-12 col-lg-6 mb-4 mb-lg-0 <?= $order; ?>">
          <img class="img-fluid img-shadow" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">
        </div>
      <? endif; ?>
      <div class="col-12 col-lg-6 order-2">
        <? the_sub_field('content'); ?>
      </div>
    </div>
  </div>
</section>
