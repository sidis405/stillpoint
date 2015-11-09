<?php

namespace Stillpoint\Models;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;


class News extends Model implements HasMedia
{
    use PresentableTrait, HasMediaTrait;

    protected $presenter = 'Stillpoint\Presenters\NewsPresenter';

    public static function make()
    {
        $item = new static();

        return $item;
    }

    public static function edit($item_id, $title, $slug, $excerpt, $body, $featured_image_id)
    {
        $item = static::find($item_id);

        $item->title = $title;
        $item->slug = $slug;
        $item->excerpt = $excerpt;
        $item->body = $body;
        $item->featured_image_id = $featured_image_id;

        return $item;
    }

    public function featuredImage()
    {
        return $this->belongsTo('Stillpoint\Models\FeaturedImage', 'featured_image_id');
    }



}
