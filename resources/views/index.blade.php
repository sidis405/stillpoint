@extends('layouts.master')

@section('content')



@foreach($news as $item)
        <div class="news">
          <div class="news-img" style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}') no-repeat"></div>
          <h4 class="news-title">{{$item->title}}</h4><span class="date">{{$item->created_at->format('d/m/y')}}</span>
          <p class="news-description">{{$item->excerpt}}</p>
        </div>
    @endforeach
@stop
        