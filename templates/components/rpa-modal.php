<div class="modal fade" id="reviewsmodal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Review insturen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <? $shortcode = get_field('form_shortcode', 'option'); ?>
        <? if($shortcode): ?>
          <?= do_shortcode( $shortcode ); ?>
        <? else: ?>
          <div class="alert alert-danger">
            <span>Kies een formulier in de <a href="/wp-admin/admin.php?page=degelder-options" rel="nofollow">Thema Instellingen</span>
          </div>
        <? endif; ?>
      </div>
    </div>
  </div>
</div>
