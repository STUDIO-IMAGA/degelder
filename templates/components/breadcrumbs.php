<? if ( function_exists('yoast_breadcrumb') ): ?>
  <section class="breadcrumbs<?=(is_product())?' bg-yellow-light':''; ?>">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <? yoast_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </section>
<? endif; ?>
