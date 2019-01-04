<?
/**
* Template Name: Vacatures
*/

use IMAGA\Theme\Extras;
?>

<? get_template_part('templates/header'); ?>

<? while (have_posts()) : the_post(); ?>

  <section class="layout vacancies">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="wrapper">
            <div class="item">
            <h3>Kaasmeester (m/v)</h3>
            <p>Al meer dan 20 jaar in elk land, streek e.d. Op zoek naar kazen. Kom ik vandaag achter tynjetaler-wat een heerlijke kaas met een eigen karakter (gegeten op 1en aanrader voor de 'kaaskop'! Proin enim magna, auctor quis tincidunt id, scelerisque eget sapien.</p>
            <a class="btn btn-yellow" href="#">Lees meer</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<? endwhile; ?>
