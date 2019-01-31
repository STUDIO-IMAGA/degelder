<section class="element steps">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center title">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>

    <div class="row wrapper">
      <div class="col-12 col-md-10">

        <? if( have_rows('steps') ): ?>
          <? while( have_rows('steps') ): the_row(); ?>

            <? $image = get_sub_field('image'); ?>

            <div class="row item">

              <div class="col-12 col-sm-5 col-md-4 col-xl-3 text-center">
                <img class="img-fluid mb-3 mb-sm-0" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">
              </div>

              <div class="col-12 col-sm-7 col-md-8 col-xl-9">
                <? the_sub_field('content'); ?>
              </div>

            </div>

          <? endwhile; ?>
        <? endif;?>

      </div>
    </div>
  </div>
</section>
