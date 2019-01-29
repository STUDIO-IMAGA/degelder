<? $layout = get_sub_field('layout_'.$selector); ?>

<div class="container">
  <div class="row align-items-start">

    <? if( $layout['fact_1']['post'] ): ?>

      <? $post = $layout['fact_1']['post']; setup_postdata($post); $image = get_field('image', $post->ID); $color = $layout['fact_1']['color']; ?>

      <div class="col-6">
        <div class="facts-item <?= $color; ?>">
          <div class="facts-bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 221 168" preserveAspectRatio="none"><path d="M11,154.74C10.77,154,4.9,108.23,6.68,65L8.47,21.86s40.63-5.37,76.15-5.37,78.45,6.39,97.87,5.11,25-1.53,25-.76a62.13,62.13,0,0,0,3.32,23.76c4.34,12.78,2.81,45.74,2.81,52.64s3.83,50.34,7.67,55.2c0,0-11.25,1.53-18.4-1.54S11,154.74,11,154.74Z"/></svg>
          </div>
          <div class="facts-content">
            <h4><? the_content(); ?></h4>
            <div class="image">
              <img class="img-fluid" src="<?= $image['url']; ?>" title="<?= $image['title']; ?>" alt="<?= $image['alt']; ?>">
            </div>
          </div>
        </div>
      </div>

      <? wp_reset_postdata(); ?>

    <? else: ?>
      <? get_template_part('templates/components/fact','error'); ?>
    <? endif; ?>

    <? if( $layout['fact_2']['post'] ): ?>

      <? $post = $layout['fact_2']['post']; setup_postdata($post); $image = get_field('image', $post->ID); $color = $layout['fact_2']['color']; ?>

      <div class="col-6">
        <div class="facts-item <?= $color; ?>">
          <div class="facts-bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 221 168" preserveAspectRatio="none"><path d="M11,154.74C10.77,154,4.9,108.23,6.68,65L8.47,21.86s40.63-5.37,76.15-5.37,78.45,6.39,97.87,5.11,25-1.53,25-.76a62.13,62.13,0,0,0,3.32,23.76c4.34,12.78,2.81,45.74,2.81,52.64s3.83,50.34,7.67,55.2c0,0-11.25,1.53-18.4-1.54S11,154.74,11,154.74Z"/></svg>
          </div>
          <div class="facts-content">
            <div class="image">
              <img class="img-fluid" src="<?= $image['url']; ?>" title="<?= $image['title']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <h4><? the_content(); ?></h4>
          </div>
        </div>
      </div>

      <? wp_reset_postdata(); ?>

    <? else: ?>
      <? get_template_part('templates/components/fact','error'); ?>
    <? endif; ?>

  </div>
</div>
