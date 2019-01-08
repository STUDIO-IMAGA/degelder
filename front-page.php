<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header','frontpage'); ?>

<? if( have_rows('sections') ): ?>
  <? while( have_rows('sections') ): the_row(); ?>

  <? Extras\get_section( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>

<section class="layout review-featured-agenda">
  <div class="container">
    <div class="row">
      <div class="col-6 pt-3 pb-4 bg-reviews">
        <? get_template_part('templates/components/frontpage','reviews'); ?>
      </div>
      <div class="col-6 pt-3 pb-4 bg-agenda">
        <? get_template_part('templates/components/frontpage','featured-agenda'); ?>
      </div>
    </div>
  </div>
</section>
