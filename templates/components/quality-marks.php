<div class="component quality-marks">
  <? if( have_rows('quality_marks', 'option') ): ?>
    <? while ( have_rows('quality_marks', 'option') ) : the_row(); ?>
      <? $image = get_sub_field('image'); ?>
      <div class="item">
        <img class="img-fluid img-round mr-2" src="<?php echo $image['sizes']['quality-mark']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>"/>
      </div>
    <? endwhile; ?>
  <? endif; ?>
</div>
