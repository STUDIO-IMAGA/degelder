<section class="layout gallery">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>
    <div class="row wrapper">
      <div class="col-12">
        <div class="slick-slider">

          <? if( have_rows('slides') ): ?>
            <? while( have_rows('slides') ): the_row(); ?>
              <? $image = get_sub_field('image'); ?>
              <div class="item">

                <img class="img-fluid img-shadow" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">

                <div class="description">
                  <div class="title">
                    <? the_sub_field('title'); ?>
                  </div>
                  <div class="content">
                    <? the_sub_field('description'); ?>
                  </div>
                </div>

              </div>
            <? endwhile; ?>
          <? endif;?>

        </div>
      </div>
    </div>
  </div>
</section>
