<section class="element employees-list">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>

    <div class="row justify-content-center wrapper">

      <? $custom_term = get_sub_field('employees_group'); ?>

        <? $args = array('post_type' => 'employees', 'tax_query' => array(array( 'taxonomy'=>'group', 'field'=>'slug', 'terms'=>$custom_term->slug ) )); ?>
        <? $query = new wp_query( $args ); $i = 0; $total = $query->found_posts;?>

          <? if($query->have_posts()): ?>
             <? while( $query->have_posts() ) : $query->the_post(); ?>

             <div class="col-3 employee">

               <img class="img-fluid img-round" src="<?= get_the_post_thumbnail_url( get_the_ID(), 'thumbnail'); ?>" alt="Persoon">

               <div class="name">
                 <? the_field('firstname', get_the_ID() ); ?> <? the_sub_field('lastname', get_the_ID() ); ?>
               </div>

               <div class="description">
                 <? the_sub_field('job_title', get_the_ID()); ?>
               </div>

             </div>

             <? endwhile; ?>

           <? wp_reset_postdata(); wp_reset_query();?>
         <? endif; ?>

    </div>
  </div>
</section>
