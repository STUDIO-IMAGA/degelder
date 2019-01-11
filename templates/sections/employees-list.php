<section class="layout employees-list">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>

    <div class="row wrapper">

      <? $args = array('post_type' => 'employees', 'posts_per_page' => -1); ?>
      <? $query = new wp_query( $args );?>

      <? if($query->have_posts()): ?>
        <? while( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-3 employee">
            <img class="img-fluid img-round" src="<?= get_the_post_thumbnail_url('thumbnail'); ?>" alt="Persoon">
            <div class="name">
              <? the_sub_field('firstname'); ?> <? the_sub_field('lastname'); ?>
            </div>
            <div class="description">
              <? the_sub_field('job_title'); ?>
            </div>
          </div>
        <? endwhile; ?>
        <? wp_reset_postdata(); wp_reset_query();?>
      <? endif; ?>

    </div>
  </div>
</section>
