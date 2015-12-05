<div class="modal fade" role="dialog" id="gallery-modal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Pick a main image to feature</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
    
            <div class="images-container" id="image-picker-select">
        @include('admin.gallery.featured.image-picker-select', array('gallery' => $model->media))
    </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-orange" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" id="confirm_featured_image">Insert</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->