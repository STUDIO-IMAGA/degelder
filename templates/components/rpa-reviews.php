<h5 class="mb-4">
  <span class="underlined"><? the_sub_field('title_reviews'); ?></span>
</h5>

<div class="row">
  <div class="col-12">

    <? $args = array('post_type' => 'reviews', 'posts_per_page' => 4 ); ?>
    <? $query = new WP_Query( $args ); ?>

    <? if($query->have_posts()): ?>

      <div class="slick-reviews">

         <? while( $query->have_posts() ) : $query->the_post(); ?>

           <div class="review">
             <div class="author"><? the_title(); ?></div>
             <div class="quote">
               <? the_content(); ?>
             </div>
           </div>

         <? endwhile; ?>

       </div>

     <? wp_reset_postdata(); wp_reset_query();?>
   <? endif; ?>

  </div>
</div>

<div class="row">
  <div class="col-12 text-center text-md-left;">
    <a class="btn btn-outline-brown btn-sm d-none d-md-inline-block" href="/reviews">Lees alle reacties</a> <a class="btn btn-outline-brown btn-sm d-none d-md-inline-block" href="/geef-een-reactie" data-toggle="modal" data-target="#reviewsmodal">Geef een reactie</a>
  </div>
</div>
