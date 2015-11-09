@extends('admin.layouts.master')

@section('content')

 @include('layouts.errors')

<section class="main">
      <div class="container">     
        @include('flash::message')
        <h1>Press Items List</h1>
        <h2>In this section you may browse the media items present on the Press section of the site.</h2>
        <div class="actions"><a href="/admin/press/create">
            <div class="btn btn-green btn-circle"><i class="fa fa-plus"></i></div></a><span>Add item     </span></div>
        <div class="card tables-card">
          <div class="card-header">
            <h2>Click on a row to modify it      </h2>
          </div>
          <div class="card-body">
            <table class="table table-responsive table-hover">
              <thead>
                <tr>
                  <th>Cover image</th>
                  <th>Url</th>
                </tr>
              </thead>
              <tbody>
              @foreach($press as $item)
                <tr href="/admin/press/{{$item->id}}/edit">
                  <td>
                    <div class="thumbnail-preview-list" @if($item->cover_image_id > 0) style="background: url('/image/{{$item->coverImage->id}}/{{$item->coverImage->file_name}}?w=120&h=120&fit=crop') no-repeat center center;" @endif ></div>
                  </td>
                  <td>
                    <a href="{{$item->path}}" target="_blank">{{$item->path}}</a>
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