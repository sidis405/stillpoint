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
        $news = $news_repo->getAll();

        return view('index', compact('news'));

    }


}
