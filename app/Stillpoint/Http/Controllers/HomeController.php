<?php

namespace Stillpoint\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Stillpoint\Repositories\NewsRepo;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();

        return view('index', compact('news'));

    }

    public function article($slug, NewsRepo $news_repo)
    {
        $item = $news_repo->getFromSlug($slug);

        if( ! $item) redirect()->to('/');

        return view('article', compact('item'));


    }

    public function privacy()
    {
        return view('privacy.blade.php');
    }

    public function pull()
    {
        $out = '';
        $result = array();
        $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/stillpoint pull 2>&1");
        return $result;
    }


}
