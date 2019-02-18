<? $post_ID = get_sub_field('featured_product'); ?>
<? $image = get_field('featured_image', $post_ID); ?>

<h5 class="mb-4">
  <span class="underlined"><? the_sub_field('title_product'); ?></span>
</h5>

<div class="row">
  <div class="col-4">
    <img class="img-fluid img-round" src="<?= $image['sizes']['rpa-product'] ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">
  </div>
  <div class="col-8">
    <h2><?= get_the_title($post_ID); ?></h2>
    <p><? the_sub_field('featured_product_content'); ?></p>
    <a class="btn btn-outline-brown btn-lg" href="<?= get_permalink($post_ID); ?>">Bestellen</a>
  </div>
</div>
