<section class="element employees-display">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="wrapper">

          <? $custom_terms = get_terms('group'); ?>

          <? foreach($custom_terms as $custom_term): wp_reset_query(); ?>
            <? $args = array('post_type' => 'employees', 'tax_query' => array(array( 'taxonomy'=>'group', 'field'=>'slug', 'terms'=>$custom_term->slug ) )); ?>
            <? $query = new wp_query( $args ); $i = 0; $total = $query->found_posts;?>

              <? if($query->have_posts()): ?>
                <div class="item">

                  <? $image = get_field('image', $custom_term); ?>

                  <? if($image): ?>

                    <img class="img-fluid img-shadow" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">

                  <? else: ?>

                    <img class="img-fluid img-shadow" src="https://placehold.it/550x320?text=<?= $custom_term->name; ?>" title="Kies een afbeelding voor de groep '<?= $custom_term->name; ?>'.">

                  <? endif; ?>

                  <div class="names">
                    <? while( $query->have_posts() ) : $query->the_post(); $i++; ?>

                      <? the_field('firstname'); ?><?= ($i < $total )?', ':''; ?>

                    <? endwhile; ?>
                  </div>

                  <div class="label"><?= $custom_term->name; ?></div>

                 </div>

               <? wp_reset_postdata(); wp_reset_query();?>
             <? endif; ?>
            <? endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</section>
