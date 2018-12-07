<?
/**
* Template Name: Test Template
*/

use IMAGA\Theme\Extras;
?>

<? while (have_posts()) : the_post(); ?>

  <? if( have_rows('layouts') ): ?>
    <? while( have_rows('layouts') ): the_row(); ?>

      <? Extras\get_layout( get_row_layout() ); ?>

    <? endwhile; ?>
  <? endif; ?>

<? endwhile; ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, <b>consectetuer</b> adipiscing elit. Aenean <strong>commodo</strong> ligula eget dolor. <i>Aenean</i> massa. Cum sociis <code>natoque penatibus</code> et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <h1>Nam eget dui.</h1>
        <h2>Nam eget dui.</h2>
        <h3>Nam eget dui.</h3>
        <h4>Nam eget dui.</h4>
        <h5>Nam eget dui.</h5>
        <h6>Nam eget dui.</h6>
      </div>
    </div>
  </div>
</section>
