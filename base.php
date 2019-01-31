<?
ini_set('zlib.output_compression_level',6); if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')) ob_start('ob_gzhandler'); else ob_start();
use IMAGA\Theme\Setup;
use IMAGA\Theme\Wrapper;
?>
<!doctype html>
<html <? language_attributes(); ?>>
  <? get_template_part('templates/head'); ?>
  <body id="top" <? body_class(); ?> >
    <div class="breakpoint-indicator">
      <span class="d-block d-sm-none">XS</span>
      <span class="d-none d-sm-block d-md-none">SM</span>
      <span class="d-none d-md-block d-lg-none">MD</span>
      <span class="d-none d-lg-block d-xl-none">LG</span>
      <span class="d-none d-xl-block">XL</span>
    </div>

    <!--[if IE]>
      <div class="alert alert-warning">
        <? _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'imaga'); ?>
      </div>
    <![endif]-->

    <? do_action('get_header'); ?>

    <? get_template_part('templates/navigation'); ?>

    <div class="wrap" role="document">

      <main>

        <? include Wrapper\template_path(); ?>

      </main>

    </div>

    <? do_action('get_footer');?>

    <? get_template_part('templates/footer'); ?>

    <? wp_footer(); ?>

  </body>
</html>
<?php ob_end_flush();?>
