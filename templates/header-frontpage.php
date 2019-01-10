<? use IMAGA\Theme\Assets; ?>

<section class="header-frontpage">
  <div class="container">
    <div class="container-bg" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>);"></div>
    <div class="row align-items-end">
      <div class="col-8">
        <div class="row">
          <div class="col-12 text-white">
            <h1 class="display-1"><? the_field('header_title'); ?></h1>
          </div>
        </div>
        <div class="row bg-cyan">
          <div class="col-12 py-3">
            <? the_field('header_content'); ?>
          </div>
        </div>
      </div>
      <div class="col-4 bg-yellow-light py-3">
        <div class="row">
          <div class="col-12">
            <? the_field('header_sidebar'); ?>
            <br/>
            <h3>Ons motto:</h3>
            <h3><i><? the_field('company_motto', 'option');?></i></h3>
            <p><b>Wij zijn lid van</b></p>
            <? get_template_part('templates/components/quality-marks'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
