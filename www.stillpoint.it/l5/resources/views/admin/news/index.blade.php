@extends('admin.layouts.master')

@section('content')

 @include('layouts.errors')

<section class="main">
      <div class="container">     
        @include('flash::message')
        <h1>Sezione 'News'</h1>
        <h2>In questa sezione sono consultabili le news presenti sul sito</h2>
        <div class="actions"><a href="/admin/news/crea">
            <div class="btn btn-green btn-circle"><i class="fa fa-plus"></i></div></a><span>Aggiungi news     </span></div>
        <div class="card tables-card">
          <div class="card-header">
            <h2>Clicca su una riga per modificarla      </h2>
          </div>
          <div class="card-body">
            <table class="table table-responsive table-hover">
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>Titolo</th>
                  <th>Descrizione</th>
                </tr>
              </thead>
              <tbody>
              @foreach($news as $item)
                <tr href="/admin/news/{{$item->id}}/modifica">
                  <td>
                    <div class="thumbnail-preview-list" @if($item->featured_image_id > 0) style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}?w=120&h=120&fit=crop') no-repeat center center;" @endif ></div>
                  </td>
                  <td>
                    <a href="{{$item->title}}" target="_blank">{{$item->title}}</a>
                  </td>
                  <td>
                    <a href="{{$item->excerpt}}" target="_blank">{{$item->excerpt}}</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  @stop