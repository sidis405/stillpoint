
    <div id="news-modal_{{$item->id}}" class="white-popup mfp-fade news-modal">
      <div class="news-img" style="background: url('/uploads/{{$item->featuredImage->id}}/{{$item->featuredImage->file_name}}') no-repeat center center;     background-size: cover !important;"></div>
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
      <p>{{$item->excerpt}}</p>
      <p>{!!$item->body!!}</p>
    </div>