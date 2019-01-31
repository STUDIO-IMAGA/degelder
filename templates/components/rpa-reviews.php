<h5 class="mb-4">
  <span class="underlined"><? the_sub_field('title_reviews'); ?></span>
</h5>

<div class="row">
  <div class="col-12">

    <? $args = array('post_type' => 'reviews', 'posts_per_page' => 4 ); ?>
    <? $query = new WP_Query( $args ); ?>

    <? if($query->have_posts()): ?>
       <? while( $query->have_posts() ) : $query->the_post(); ?>

         <div class="review">
           <div class="author"><? the_title(); ?></div>
           <div class="quote">
             <? the_content(); ?>
           </div>
         </div>

       <? endwhile; ?>

     <? wp_reset_postdata(); wp_reset_query();?>
   <? endif; ?>

  </div>
</div>

<div class="row">
  <div class="col-12">
    <a class="btn btn-outline-brown btn-sm" href="/reviews">Lees alle reacties</a> <a class="btn btn-outline-brown btn-sm" href="mailto:info@kaasboerderijdegelder.nl?subject=Review">Geef een reactie</a>
  </div>
</div>
