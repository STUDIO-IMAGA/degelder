<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header','frontpage'); ?>

<? get_template_part('templates/layouts/featured','product'); ?>

<? get_template_part('templates/layouts/columns'); ?>

<section class="layout review-featured-agenda">
  <div class="container">
    <div class="row">
      <div class="col-6 pt-3 pb-4 bg-reviews">
        <? get_template_part('templates/parts/frontpage','reviews'); ?>
      </div>
      <div class="col-6 pt-3 pb-4 bg-agenda">
        <? get_template_part('templates/parts/frontpage','featured-agenda'); ?>
      </div>
    </div>
  </div>
</section>

<? get_template_part('templates/layouts/facts'); ?>

<? get_template_part('templates/layouts/title'); ?>

<? get_template_part('templates/layouts/content'); ?>

<? get_template_part('templates/layouts/employees','display'); ?>

<? get_template_part('templates/layouts/employees','list'); ?>

<? get_template_part('templates/layouts/gallery'); ?>

<? get_template_part('templates/layouts/steps'); ?>

<? get_template_part('templates/layouts/products','list'); ?>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
