<?php

namespace Stillpoint\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Stillpoint\Repositories\NewsRepo;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsRepo $news_repo)
    {
        $news = $news_repo->getAll();

        return view('admin.news.index', compact('news'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = $this->dispatchFrom('Stillpoint\Commands\News\CreateNewsCommand', $request);
        
        return redirect()->to('/admin/news/' . $news->id .'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, NewsRepo $news_repo)
    {
        $news = $news_repo->getById($id);

        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, NewsRepo $news_repo)
    {
        $news = $news_repo->getById($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = $this->dispatchFrom('Stillpoint\Commands\News\CreateNewsCommand', $request);

        return redirect()->to('/admin/news/' . $news->id .'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return News::delete($id);
    }
}
