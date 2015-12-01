@extends('layouts.master')

@section('headers')

	@include('headers')

@stop

@section('content')

   <nav class="navbar navbar-default navbar-article">
      <div class="container"><a href="../index">
          <h1 class="logo">Still Point</h1></a></div>
    </nav>
    <div id="news-page">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="news-article-img"  style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}') no-repeat  center center;     background-size: cover !important"></div>
            <h2>{{$item->title}}</h2>
            <span class="shares">
            	<a href="https://www.facebook.com/sharer/sharer.php?u=http://stillpoint.sidrit.com/articolo/{{$item->slug}}" target="_blank">
            						<i class="fa fa-facebook-official"></i>
            	      </a>
            	      <a href="https://twitter.com/share?url=http://stillpoint.sidrit.com/articolo/{{$item->slug}}&text={{$item->title}}">
            	      		<i class="fa fa-twitter-square"></i>
            	      </a>
            </span>
            <span class="date">{{$item->created_at->format('d/m/y')}}</span>
            <!-- <p>{{$item->excerpt}}</p> -->
            <p>{!!$item->body!!}</p>
          </div>
        </div>
      </div>
    </div>
    @stop