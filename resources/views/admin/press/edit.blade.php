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
        <h1>Edit Press Item</h1>
        <h2>In this section you may edit a press item.</h2>

        @include('layouts.errors')
        @include('flash::message')
        <form action="/admin/press/{{ $press->id }}" method="POST" id="album_editing_form" enctype="multipart/form-data">
        <input type="hidden" name="press_id" value="{{ $press->id }}">
        <input type="hidden" id="cover_image_persisted" value="{{ $press->cover_image_id }}">
        <input type="hidden" name="cover_image_id" id="cover_image_id" value="{{ $press->cover_image_id }}">
        {{csrf_field()}}
            <div class="card card-add-project">
  
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 centered">
                      <h3>Cover Image (332x306px)</h3>
                        <div class="form-group">
                          <a id="cover_image_preview">
                              <div class="thumbnail-preview-add thumbnail-preview-add-cover" @if($press->cover_image_id > 0) style="background: url('/image/{{$press->coverImage->id}}/{{$press->coverImage->file_name}}?w=280&h=280&fit=crop') no-repeat center center;" @endif >
                                <div class="btn">Choose a cover image</div>
                              </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <h3>Url address of the press item</h3>
                      <div class="input-material">                      
                        <label for="" class="label-material"></label>
                        <input type="text" name="path" value="{{ old('name', $press->path) }}" placeholder="example: http://www.example.com/KP" class="input-field-material" required title="This field is obligatory." x-moz-errormessage="This field is obligatory.">
                      </div>
                      @if(strlen($press->path))
                            <a class="press-path" href="{{$press->path}}" target="_blank"><i class="fa fa-external-link"></i><span>View external link</span></a>
                      @endif
                    <br>
                    <br>

                      <div class="form-group">                          
                          <label for="" class="label-material uploadfile-label">Or upload an attachment</label>
                          <div class="upload-material">
                            <span id="filename-label">Upload file</span>
                            <input type="file" name="attachment" id="attachment">                            
                          </div>
                          <div style="display: inline-block;"><span id="filename"> </span><i class="fa fa-times-circle" id="remove-attachment"></i></div>
                        </div>
                    </div>
                  </div>
              </div>

            </div>
            
        </form>
        <br>

      
      @include('admin.gallery.gallery-section', array('model' => $press, 'model_name' => 'press', 'model_route' => 'press'))
      <div class="centered">
              <button id="toolbar-save-form" class="btn btn-green">Save</button>
              <a href="/admin/press" class="btn btn-orange">Reset</a>
            </div>
        </div>

      </div>

      <form method="POST" action="/admin/press/{{ $press->id }}/remove" id="album_deletion_form">
                        {{ csrf_field() }} </form>

    </section>
    @stop

@section('footer_extras')

<script type="text/javascript" src="/adm/scripts/dropzone-bindings.js"></script>
<script type="text/javascript" src="/adm/scripts/image-picker.min.js"></script>
<script type="text/javascript" src="/adm/scripts/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    
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