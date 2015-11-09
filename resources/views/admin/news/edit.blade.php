@extends('admin.layouts.master')

@section('header_extras')

<meta name="_token" content="{{ csrf_token() }}" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/image-picker.css">
<link rel="stylesheet" type="text/css" href="/adm/styles/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="/css/summernote.css">

@stop

@section('content')

@include('admin.layouts.toolbar')

  <section class="main">
      <div class="container">           
        <h1>Modifica news : '{{$news->title}}'</h1>
        <h2>In questa sezione si possono modificare le news e gestire immagini di copertina.</h2>

        @include('layouts.errors')
        @include('flash::message')
        <form action="/admin/news/{{ $news->id }}" method="POST" id="album_editing_form" enctype="multipart/form-data">
        <input type="hidden" name="news_id" value="{{ $news->id }}">
        <input type="hidden" id="featured_image_persisted" value="{{ $news->featured_image_id }}">
        <input type="hidden" name="featured_image_id" id="featured_image_id" value="{{ $news->featured_image_id }}">
        {{csrf_field()}}
            <div class="card card-add-project">
  
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 centered">
                      <h3>Immagine copertina (450x250px)</h3>
                        <div class="form-group">
                          <a id="featured_image_preview">
                              <div class="thumbnail-preview-add thumbnail-preview-add-featured" @if($news->featured_image_id > 0) style="background: url('/uploads/{{$news->featuredImage->id}}/{{$news->featuredImage->file_name}}?w=280&h=280&fit=crop') no-repeat center center;" @endif >
                                <div class="btn">Scegli immagine di copertina</div>
                              </div>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <h3>Titolo</h3>
                      <div class="input-material">                      
                        <label for="" class="label-material"></label>
                        <input type="text" name="title" value="{{ old('title', $news->title) }}" placeholder="Titolo..." class="input-field-material" required title="Questo campo è obbligatorio." x-moz-errormessage="Questo campo è obbligatorio." required>
                      </div>
                    <h3>Breve descrizione</h3>
                      <div class="input-material">                      
                        <label for="" class="label-material"></label>
                        <textarea name="excerpt" id="excerpt" cols="60" rows="7" required>{{ old('excerpt', $news->excerpt) }}</textarea>
                      </div>

                      
                    </div>
                  </div>
              </div>

            </div>
            

        <div class="card card-add-project">
        
          <div class="card-body">
              <div class="row">
                <div class="col-md-12 centered">
                   <div class="input-matesrial">                      
                        <label for="" class="label-material"></label>
                        <textarea name="body" id="body" cols="60" rows="7" required>{{ old('body', $news->body) }}</textarea>
                      </div>
                </div>
               
              </div>
          </div>

        </div>
        </form>
        <br>

      
      @include('admin.gallery.gallery-section', array('model' => $news, 'model_name' => 'news', 'model_route' => 'news'))
      <div class="centered">
              <button id="toolbar-save-form" class="btn btn-green">Salve</button>
              <a href="/admin/news" class="btn btn-orange">Abbandona</a>
            </div>
        </div>

      </div>

      <form method="POST" action="/admin/news/{{ $news->id }}/remove" id="album_deletion_form">
                        {{ csrf_field() }} </form>

    </section>
    @stop

@section('footer_extras')

<script type="text/javascript" src="/adm/scripts/dropzone-bindings.js"></script>
<script type="text/javascript" src="/adm/scripts/image-picker.min.js"></script>
<script type="text/javascript" src="/adm/scripts/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/summernote.js"></script>
<script type="text/javascript" src="/js/summernote-bindings.js"></script>

<script type="text/javascript">
    
    $("#featured_image_id_field").imagepicker({limit: 1});

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