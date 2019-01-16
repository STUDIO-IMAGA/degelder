<? use IMAGA\Theme\Extras; ?>
<? use IMAGA\Theme\Assets; ?>

<? get_template_part('templates/header','frontpage'); ?>

<? get_template_part('templates/components/frontpage','featured-product'); ?>

<? get_template_part('templates/sections/featured-pages'); ?>

<section class="layout review-featured-agenda">
  <div class="container">
    <div class="row">
      <div class="col-6 pt-3 pb-4 bg-reviews">
        <? get_template_part('templates/components/frontpage','reviews'); ?>
      </div>
      <div class="col-6 pt-3 pb-4 bg-agenda">
        <? get_template_part('templates/components/frontpage','featured-agenda'); ?>
      </div>
    </div>
  </div>
</section>
