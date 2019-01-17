<? $selector = get_sub_field('layout_selector'); ?>
<? $layout = get_sub_field('layout_'.$selector); ?>

<section class="element facts">

  <? if( get_sub_field('title') ): ?>
    <div class="row">
      <div class="col-12 text-center">
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>
  <? endif; ?>

  <? include(locate_template('templates/components/fact-layout-'.$selector.'.php')); ?>

</section>
