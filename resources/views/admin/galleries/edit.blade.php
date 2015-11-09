@extends('admin.layouts.master')

@section('header_extras')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/image-picker.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/magnific-popup.css">

@stop

@section('content')

@include('admin.layouts.toolbar')

  <section class="main">
      <div class="container">           
        <h1>Edit gallery item</h1>
        <h2>In this section you may edit a gallery item.</h2>
        <div class="actions"><a href="/admin/gallery/create">
            <div class="btn btn-green btn-circle"><i class="fa fa-plus"></i></div></a><span>Add another item     </span></div>
        

        @include('layouts.errors')
        @include('flash::message')
        <form action="/admin/gallery/{{ $gallery->id }}" method="POST" id="album_editing_form">
        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
        <input type="hidden" id="featured_image_persisted" value="{{ $gallery->featured_image_id }}">
        <input type="hidden" name="featured_image_id" id="featured_image_id" value="{{ $gallery->featured_image_id }}">
        <input type="hidden" id="cover_image_persisted" value="{{ $gallery->cover_image_id }}">
        <input type="hidden" name="cover_image_id" id="cover_image_id" value="{{ $gallery->cover_image_id }}">
        {{csrf_field()}}
            <div class="card card-add-project">
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 centered">
                      <h3>Cover Image (300x300px)</h3>
                        <div class="form-group">
                          <a id="cover_image_preview">
                              <div class="thumbnail-preview-add thumbnail-preview-add-cover" @if($gallery->cover_image_id > 0) style="background: url('/image/{{$gallery->coverImage->id}}/{{$gallery->coverImage->file_name}}?w=280&h=280&fit=crop') no-repeat center center;" @endif >
                                <div class="btn">Choose cover image</div>
                              </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-6 centered">
                      <h3>Main Image (suggested: 1200px width)</h3>
                        <div class="form-group">
                          <a id="featured_image_preview">
                              <div class="thumbnail-preview-add thumbnail-preview-add-featured" @if($gallery->featured_image_id > 0) style="background: url('/image/{{$gallery->featuredImage->id}}/{{$gallery->featuredImage->file_name}}?w=280&h=280&fit=crop') no-repeat center center;" @endif >
                                <div class="btn">Chooose main image</div>
                              </div>
                          </a>
                        </div>
                    </div>
                  </div>
              </div>

            </div>
            
        </form>
        <br>

      
      @include('admin.gallery.gallery-section', array('model' => $gallery, 'model_name' => 'gallery', 'model_route' => 'gallery'))
      <div class="centered">
              <button id="toolbar-save-form" class="btn btn-green">Save</button>
              <a href="/admin/progetti" class="btn btn-orange">Reset</a>
            </div>
        

      </div>

      <form method="POST" action="/admin/gallery/{{ $gallery->id }}/remove" id="album_deletion_form">
                        {{ csrf_field() }} </form>

    </section>
    @stop

@section('footer_extras')

<script type="text/javascript" src="/adm/scripts/dropzone-bindings.js"></script>
<script type="text/javascript" src="/adm/scripts/image-picker.min.js"></script>
<script type="text/javascript" src="/adm/scripts/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    
    $("#featured_image_id_field").imagepicker({limit: 1});
    $("#cover_image_id_field").imagepicker({limit: 1});

    function doMagnificPopup () {
    $('.gallery-item').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
}

doMagnificPopup();



</script>

@stop