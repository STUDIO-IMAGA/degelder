<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? while (have_posts()) : the_post(); ?>
  <article <? post_class(); ?>>

    <? if( have_rows('sections') ): ?>
      <? while( have_rows('sections') ): the_row(); ?>

        <? Extras\get_element( get_row_layout() ); ?>

      <? endwhile; ?>
    <? endif; ?>

  </article>
<? endwhile; ?>
