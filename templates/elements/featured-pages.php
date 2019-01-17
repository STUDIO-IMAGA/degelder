<section class="element columns">
  <div class="container py-7">
    <div class="row">
      <? if( have_rows('featured_pages') ): ?>
        <? while( have_rows('featured_pages') ): the_row(); ?>

          <? $post_object = get_sub_field('featured_page'); ?>

          <? if( $post_object ): ?>

          	<? $post = $post_object; ?>
          	<? setup_postdata( $post ); ?>

            <div class="col-12 col-lg-4">
              <a class="unstyled" href="<?= get_permalink($post->ID); ?>">
                <h4><? the_sub_field('featured_page_title'); ?></h4>
                <img class="img-fluid mb-2" src="<?= get_the_post_thumbnail_url($post->ID); ?>" alt="<? the_sub_field('featured_page_title'); ?>">
                <p><? the_sub_field('featured_page_description'); ?></p>
              </a>
            </div>

            <?php wp_reset_postdata(); ?>
          <? endif; ?>

        <? endwhile;?>
      <? endif; ?>
    </div>
  </div>
</section>
