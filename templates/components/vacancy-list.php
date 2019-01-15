<? $args = array('post_type' => 'vacancies', 'posts_per_page' => -1 ); ?>
<? $query = new wp_query( $args ); ?>



 <section class="component vacancy-list">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-10">
         <div class="wrapper">


           <? if($query->have_posts()): ?>
              <? while( $query->have_posts() ) : $query->the_post(); ?>

              <div class="item">
                <h3><? the_title(); ?></h3>
                <? the_content(); ?>
              </div>

              <? endwhile; ?>

            <? wp_reset_postdata(); wp_reset_query();?>
          <? endif; ?>

         </div>
       </div>
     </div>
   </div>
 </section>
