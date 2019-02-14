<? $header_background_image = get_field('header_background_image'); ?>
<? $header_background_color = get_field('header_background_color'); ?>

<?
if( get_field('header_sub_content') ):

  $header_toggle = 'header-narrow';
  $header_col_left = 'col-left';
  $header_col_right = 'col-right px-5';

else:

  $header_toggle = 'header-wide';
  $header_col_left = 'col-left';
  $header_col_right = 'col-right';

endif;

$header_image_url = $header_background_image['header_image']['sizes'][$header_toggle] ?? get_the_post_thumbnail_url('header-background');
?>

<section class="element header <?= $header_toggle; ?>">
  <div class="container">

    <div class="container-bg" style="background-image:url(<?= $header_image_url; ?>);"></div>

    <div class="row align-items-end">

      <div class="col-12 <?= $header_col_left; ?>">

        <? if( $header_background_image['header_title'] ): ?>
          <div class="row d-none d-lg-block">
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

      <div class="col-12 <?= $header_col_right; ?> bg-<?= $header_background_color['content']; ?> py-4">
        <? the_field('header_content'); ?>
      </div>

    </div>
  </div>
</section>

<? if( !is_front_page() ): ?>
  <? get_template_part('templates/components/breadcrumbs'); ?>
<? endif; ?>
