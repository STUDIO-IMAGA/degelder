<? use IMAGA\Theme\Assets; ?>

<section class="header-frontpage">
  <div class="container">
    <div class="container-bg" style="background-image:url(<?= get_the_post_thumbnail_url(); ?>);"></div>
    <div class="row align-items-end">
      <div class="col-8">
        <div class="row">
          <div class="col-12 text-white">
            <h1 class="display-1">Kaasboerderij</h1>
            <h1 class="display-1">De Gelder</h1>
          </div>
        </div>
        <div class="row bg-cyan">
          <div class="col-12 py-3">
            <p>Prijswinnende boerenkaasmakers en Fries familiebedrijf sinds  1985.<br>Beleef onze kaasboerderij en proef onze kazen!</p>
            <p><a class="btn btn-yellow btn-lg" href="#">Bekijk assortiment</a><a class="btn btn-outline-brown btn-lg" href="#">Leer ons kennen</a></p>
          </div>
        </div>
      </div>
      <div class="col-4 bg-yellow-light py-3">
        <div class="row">
          <div class="col-12">
            <h2>Kaas- en zuivelmakers sinds 1985</h2>
            <ul class="list-checkmark">
              <li>Makers van de speciaalkaas Tynjetaler</li>
              <li>Alle melk van eigen koeien</li>
              <li>Echte rauwmelkse boerenkaas</li>
              <li>Drie keer Nederlands kampioen kaasmaken</li>
              <li>Vriendelijk voor mens en milieu</li>
              <li>Eerlijk en ambachtelijk</li>
              <li>Grootste producent van boerenkaas in Nederland</li>
            </ul>
            <br/>
            <h3>Ons motto:</h3>
            <h3><i>Tevreden en gezonde koeien geven de beste melk!</i></h3>
            <p><b>Wij zijn lid van</b></p>
            <? get_template_part('templates/components/quality-marks'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
