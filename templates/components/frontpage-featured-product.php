<? $post_object = get_field('featured_product_product'); ?>
<? $featured_product_title = get_field('featured_product_title'); ?>
<? $featured_product_subtitle = get_field('featured_product_subtitle'); ?>

<? if( $post_object ): ?>

	<? $post = $post_object; ?>
	<? setup_postdata( $post ); ?>

  <? $image = get_field('featured_image', $post->ID); ?>

  <section class="layout featured-product">
      <div class="container">
        <a class="unstyled" href="#">
          <div class="container-bg bg-center-left" style="background-image:url(<?= $image['url'] ?>);"></div>
          <div class="row justify-content-center">
            <div class="col-10 py-9">
              <h2><?= $featured_product_title; ?></h2>
              <h5><?= $featured_product_subtitle  ?></h5>
              <a class="btn btn-outline-brown btn-lg" href="<?= get_permalink($post->ID); ?>">Bestellen</a>
            </div>
          </div>
        </a>
      </div>
  </section>

  <?php wp_reset_postdata(); ?>
<?php endif; ?>
