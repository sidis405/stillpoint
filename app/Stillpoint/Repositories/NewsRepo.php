<?php

namespace Stillpoint\Repositories;

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
        return News::all();
    } 

    public function getById($id)
    {
        return News::where('id', $id);
    } 

    public function getBySlug($slug)
    {
        return News::where('slug', $slug);
    } 
}
