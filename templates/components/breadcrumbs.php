<? if( !is_front_page() ): ?>
  <section class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <? if ( function_exists('yoast_breadcrumb') ):
            yoast_breadcrumb();
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>
