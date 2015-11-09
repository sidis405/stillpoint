function getImagesForActivityEditGallery() {

    var model_id = $('#model_id').val();
    var model = $('#model').val();
    var token = $('meta[name="_token"]').attr('content');

    console.log('calling update for model ' + model);

    $.ajax({
        url: '/admin/model/get_images',
        type: 'POST',
        data: {
            model_id: model_id,
            model: model,
            _token: token
        },
        success: function(data) {

            // console.log(data);

            $('#images-container').html(data.gallery_partial);
            
            $('#image-picker-select').html(data.image_picker_select);
            $("#featured_image_id_field").imagepicker({limit: 1});
            
            $('#image-cover-select').html(data.image_picker_select_cover);
            $("#cover_image_id_field").imagepicker({limit: 1});
            

            doMagnificPopup();


            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;

}

$("#featured").change(function() {

    if (this.checked) {
        $('#gallery-modal').modal('show');
    }
});

$("#cover_image_preview").click(function() {

    $('#cover-modal').modal('show');
});

$("#featured_image_preview").click(function() {

    $('#gallery-modal').modal('show');
});


$(document).on('click', '#confirm_cover_image', function() {

    var value = $("#cover_image_id_field").data("picker").selected_values()

    var img = $('#cover_image_id_field option[value="' + value + '"]').data('img-src');

    console.log('insert')
    console.log(value);
    
    // $('#selected_image_preview').html('<img style="width:280px" src="' + img + '">');
    console.log(img);
    $('.thumbnail-preview-add-cover').attr('style', "background: url('" + img + "?w=280&h=280&fit=crop') no-repeat center center;)");
    $('#cover_image_id').val(value);

});

$(document).on('click', '#confirm_featured_image', function() {

    var value = $("#featured_image_id_field").data("picker").selected_values()

    var img = $('#featured_image_id_field option[value="' + value + '"]').data('img-src');

    console.log('insert')
    // console.log(value);
    
    // $('#selected_image_preview').html('<img style="width:280px" src="' + img + '">');
    console.log(img);
    $('.thumbnail-preview-add-featured').attr('style', "background: url('" + img + "?w=280&h=280&fit=crop') no-repeat center center;)");
    $('#featured_image_id').val(value);

});





$(document).on('click', '.delete-media', function() {

    var id = $(this).data('id');
    var route = $(this).data('model');
    // console.log(route);
    var persisted_id = $('#featured_image_persisted').val();
    var persisted_cover = $('#cover_image_persisted').val();

    // console

    if (id == persisted_id || id == persisted_cover ) {
        alert("Cannot remove this imagege bacause it has been set for display.");
        return false;
    } else {
        var c = confirm("Are you sure you want to remove this image?");

        if (c) {


            $('#media_option_' + id).remove();
            $('#media_gallery_' + id).remove();

            $("#featured_image_id_field").imagepicker({
                limit: 1
            });
           

            deleteImage(id, route);
        }
    }

});

function deleteImage(id, route) {

    var token = $('meta[name="_token"]').attr('content');

    $.ajax({
        url: '/admin/' + route +  '/' + id + '/delete_image',
        type: 'POST',
        data: {
            image_id: id,
            _method: 'DELETE',
            _token: token
        },
        success: function(data) {
            doMagnificPopup();
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });
    redoMagnificPopup();
    return false;

}

function redoMagnificPopup () {
    $('.gallery-item').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
    }

$('#toolbar-save').click(function(){
    $('#album_editing_form').submit();
});

$('#toolbar-save-form').click(function(){
    $('#album_editing_form').submit();
});

$('#toolbar-delete').click(function(){
    $('#album_deletion_form').submit();
});

$('#album_deletion_form').submit(function() {
    var c = confirm("Are you sure you permanentely want to remove this item?");
    return c; 
});
$('#attachment').change(function(){

    $('#filename').text($(this).val().replace("C:\\fakepath\\", ""));
    $('#filename-label').css('background', '#4CAF50');
    $('#remove-attachment').show();

});

$('#remove-attachment').click(function(){

    $('#attachment').val('');
    $('#filename').text('');
    $('#filename-label').css('background', '#000');
    $(this).hide();

});




