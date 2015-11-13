<?php

namespace Stillpoint\Repositories;

use Stillpoint\Models\FeaturedImage;
use Stillpoint\Models\News;

class NewsRepo
{

    public function save(News $news)
    {
        $news->save();

        return $news;
    }

    public function getAll()
    {
        return News::with('featuredImage')->latest()->get();
    } 

    public function getFromSlug($slug)
    {
        return News::with('featuredImage')->whereSlug($slug)->first();
    } 


    public function getById($id)
    {
        return News::where('id', $id)->first();
    } 

    public function getBySlug($slug)
    {
        return News::where('slug', $slug)->first();
    } 

    public function getMediaForId($id)
    {
        $album = $this->getById($id);
        
        return $album->getMedia();
    }

    public function removeImage($id)
    {
        $image = FeaturedImage::find($id);
        $image->delete();

        return true;
    }
     public function remove($id)
    {
        $activity = News::find($id);
        $activity->delete();

        return true;
    }
}
