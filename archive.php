<? get_template_part('templates/components/breadcrumbs'); ?>

<? if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <? _e('Sorry, no results were found.', 'imaga'); ?>
  </div>
  <? get_search_form(); ?>
<? endif; ?>

<section class="archive-<?= get_post_type(); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 py-5">
        <? while (have_posts()) : the_post(); ?>
          <? get_template_part('templates/content', get_post_type() ); ?>
        <? endwhile; ?>
      </div>
    </div>
  </div>
</section>

<? the_posts_navigation(); ?>
