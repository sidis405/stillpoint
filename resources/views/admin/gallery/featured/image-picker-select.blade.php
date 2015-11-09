
<select class="featured_image_id" name="featured_image_id" id="featured_image_id_field">

@foreach ($gallery as $media)

  <option id="media_option_{{$media->id}}" data-img-src="{{ $media->getUrl() }}?w=280&h=280&fit=crop" value="{{$media->id}}" @if($model->featured_image_id == $media->id) selected @endif>{{$media->id}}</option>
@endforeach

</select>