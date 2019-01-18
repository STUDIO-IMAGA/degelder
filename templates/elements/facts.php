<? $selector = get_sub_field('layout_selector'); ?>

<section class="element facts layout-<?= $selector; ?>">

  <? if( get_sub_field('title') ): ?>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2><? the_sub_field('title'); ?></h2>
        </div>
      </div>
    </div>
  <? endif; ?>

  <? include(locate_template('templates/components/fact-layout-'.$selector.'.php')); ?>

</section>
