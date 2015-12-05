<div class="modal fade" role="dialog" id="cover-modal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Pick a cover image</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    
            <div class="images-container" id="image-cover-select">
                @include('admin.gallery.cover.image-picker-cover-select', array('gallery' => $model->media))
            </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-orange" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" id="confirm_cover_image">Insert</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->