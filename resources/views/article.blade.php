@extends('layouts.master')

@section('headers')

	@include('headers')

@stop

@section('content')

  <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/#top">
            <h1 class="logo">Still Point</h1></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling-->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">			
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/#about-anchor">Lo Studio	</a></li>
            <li><a href="/#attivita-anchor">Attività</a></li>
            <li><a href="/#gallery-anchor">Gallery</a></li>
            <li><a href="/#news-anchor">News	</a></li>
            <li><a href="/#contatti-anchor">Contatti		</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse-->
      </div>
      <!-- /.container-fluid-->
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
            <p>{{$item->excerpt}}</p>
            <p>{!!$item->body!!}</p>
          </div>
        </div>
      </div>
    </div>
    @stop