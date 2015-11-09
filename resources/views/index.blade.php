@extends('layouts.master')

@section('content')



@foreach($news as $item)
        <div class="news"><img src="/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}" alt="" class="img-responsive">
          <div class="news-title">{{$item->title}}</div><span class="date">{{$item->created_at->format('d/m/y')}}</span>
          <p class="news-description">
            {{$item->excerpt}}
          </p>
        </div>
    @endforeach
@stop