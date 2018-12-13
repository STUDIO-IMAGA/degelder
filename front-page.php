<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header','frontpage'); ?>

<? get_template_part('templates/layouts/featured','product'); ?>

<? get_template_part('templates/layouts/columns'); ?>

<? if( have_rows('layouts') ): ?>
  <? while( have_rows('layouts') ): the_row(); ?>

    <? Extras\get_layout( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
