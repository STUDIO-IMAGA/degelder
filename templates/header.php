<? use IMAGA\Theme\Assets; ?>

<section class="section header">
  <div class="container">
    <div class="container-bg" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>);"></div>
    <div class="row">
      <div class="col-7">
      </div>
      <div class="col-5 bg-cyan py-4 content">
        <h1><? the_field('header_title'); ?></h1>
        <? the_field('header_content'); ?>
      </div>
    </div>
  </div>
</section>
