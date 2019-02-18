<? use IMAGA\Theme\Extras; ?>

<section class="component activities-list">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="wrapper">

          <? $args = array('post_type' => 'activities', 'posts_per_page' => -1 ); ?>
          <? $query = new wp_query( $args ); ?>

          <? if($query->have_posts()): ?>
            <? while( $query->have_posts() ) : $query->the_post(); ?>

              <div class="item media mb-6">
                <img src="<?= get_the_post_thumbnail_url(); ?>" class="mr-3" alt="<? the_title(); ?>" width="150">
                <div class="media-body">
                  <h5>
                    <? the_title(); ?><br/>
                    <small class="text-muted"><? the_field('date_time'); ?></small>
                  </h5>
                  <div class="card-text mb-4">
                    <?= Extras\limit_text(get_field('header_content'), 30); ?>
                  </div>
                  <div class="card-text">
                    <a class="btn btn-yellow btn-sm" href="<?= get_permalink(); ?>">Lees meer</a>
                  </div>
                </div>
              </div>

            <? endwhile; ?>

            <? wp_reset_postdata(); wp_reset_query();?>

          <? endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
