<? use IMAGA\Theme\Extras; ?>
<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <? if( have_rows('layouts') ): ?>
      <? while( have_rows('layouts') ): the_row(); ?>

        <? Extras\get_section( get_row_layout() ); ?>

      <? endwhile; ?>
    <? endif; ?>

  </article>
<? endwhile; ?>
