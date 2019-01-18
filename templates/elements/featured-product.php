<? $post_object = get_sub_field('product'); ?>

<? if( $post_object ): ?>

	<? $post = $post_object; setup_postdata( $post ); ?>
  <? $image = get_field('featured_image', $post->ID); ?>

  <section class="element featured-product">
      <div class="container">
        <a class="unstyled" href="#">
          <div class="container-bg bg-center-left" style="background-image:url(<?= $image['sizes']['featured-product'] ?>);"></div>
          <div class="row justify-content-start">
            <div class="col-6 offset-1 py-9">
              <h3><? the_sub_field('title');?></h3>
              <h5><? the_sub_field('subtitle'); ?></h5>
              <a class="btn btn-outline-brown btn-lg" href="<?= get_permalink($post->ID); ?>">Bestellen</a>
            </div>
          </div>
        </a>
      </div>
  </section>

  <?php wp_reset_postdata(); ?>
<?php endif; ?>
