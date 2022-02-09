<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(10);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('news.create', compact('categories'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'string',
            'news_body' => 'string',
            'category_id' => ''
        ]);
        News::create($data);
        return redirect()->route('news.index');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        $categories = Categorie::all();
        return view('news.edit',compact('news', 'categories'));
    }

    public function update(News $news)
    {
        $data = request()->validate([
            'title' => 'string',
            'news_body' => 'string',
            'category_id' => ''
        ]);
        $news->update($data);
        return redirect()->route('news.index');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}
