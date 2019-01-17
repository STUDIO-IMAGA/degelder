<? use IMAGA\Theme\Assets; ?>

<? $header_background_image = get_field('header_background_image'); ?>
<? $header_image_url = $header_background_image['header_image']['url'] ?? get_the_post_thumbnail_url(); ?>
<? $header_toggle = ( get_field('header_sub_content') ) ? 'header-wide' : 'header-narrow'; ?>
<? $header_background_color = get_field('header_background_color'); ?>

<section class="element header <?= $header_toggle; ?>">
  <div class="container">

    <div class="container-bg" style="background-image:url(<?= $header_image_url; ?>);"></div>

    <div class="row align-items-end">

      <div class="col left">

        <? if( $header_background_image['header_title'] ): ?>
          <div class="row">
            <div class="col-12 text-white">
              <h1 class="display-1"><?= $header_background_image['header_title']; ?></h1>
            </div>
          </div>
        <? endif; ?>

        <? if( get_field('header_sub_content') ): ?>
          <div class="row bg-<?= $header_background_color['sub_content']; ?>">
            <div class="col-12 py-3">
              <? the_field('header_sub_content'); ?>
            </div>
          </div>
        <? endif; ?>

      </div>

      <div class="col right bg-<?= $header_background_color['content']; ?> py-3">
        <div class="row">
          <div class="col-12">
            <? the_field('header_content'); ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
