<section class="element files-list">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h5 class="sans-serif"><i><? the_sub_field('pre_title'); ?></i></h5>
        <h2><? the_sub_field('title'); ?></h2>
      </div>
    </div>

    <? if( have_rows('lists') ): ?>
      <? while( have_rows('lists') ): the_row(); ?>
        <div class="row pt-4">
          <div class="col-12">

            <h4><? the_sub_field('list_title'); ?></h4>

            <? if( have_rows('files') ): ?>
              <ul class="wrapper">
                <? while( have_rows('files') ): the_row(); ?>

                <? $image = get_sub_field('image'); ?>
                <? $file = get_sub_field('file'); ?>

                  <li>
                    <a href="<?= $file['url']; ?>">
                      <div class="item">

                        <? if( $image ): ?>
                          <div class="image">
                            <img class="img-fluid" src="<?= $image['sizes']['file']; ?>" alt="<?= $image['alt']?>" title="<?= $image['title']?>">
                          </div>
                        <? endif;?>

                        <div class="title">
                          <? the_sub_field('title'); ?>
                        </div>

                        <div class="icon <?= $file['type']; ?>"></div>

                      </div>
                    </a>
                  </li>


              <? endwhile;?>
              </ul>
            <? endif;?>

          </div>
        </div>
      <? endwhile;?>
    <? endif;?>

  </div>
</section>
