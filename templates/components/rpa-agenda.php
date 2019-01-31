<h5 class="mb-4 mt-5">
  <span class="underlined"><? the_sub_field('title_agenda'); ?></span>
</h5>

<div class="row">
  <div class="col-12">

    <?
    $date_now = date('Y-m-d H:i:s');
    $time_now = strtotime($date_now);
    $time_next_week = strtotime('+7 day', $time_now);
    $date_next_week = date('Y-m-d H:i:s', $time_next_week);
    $args = array(
      'posts_per_page' => 3,
      'post_type'      => 'activities',
      'meta_query' => array(
        array(
          'key'     => 'date_time',
          'compare' => 'BETWEEN',
          'value'   => array( $date_now, $date_next_week ),
          'type'    => 'DATETIME'
        )
      ),
      'order'     => 'ASC',
      'orderby'   => 'meta_value',
      'meta_key'  => 'date_time',
      'meta_type' => 'DATETIME'
    );
    ?>
    <? $query = new WP_Query( $args ); ?>

    <? if($query->have_posts()): ?>
      <ul class="list-unstyled agenda">
        <? while( $query->have_posts() ): $query->the_post(); ?>

          <li>
            <a class="event" href="#">
              <div class="date">
                <? the_field('date_time'); ?>
              </div>
              <div class="description">
                <? the_title(); ?>
              </div>
            </a>
          </li>

        <? endwhile; ?>

        <? wp_reset_postdata(); wp_reset_query();?>

      </ul>

    <? endif; ?>

    <a class="btn btn-outline-brown btn-sm" href="#">Bekijk complete agenda</a>

  </div>
</div>
