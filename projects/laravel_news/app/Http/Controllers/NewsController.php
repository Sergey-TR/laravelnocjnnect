<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.main_news');
    }

    public function allNews()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        $category = $news->category()->get()[0];
        return view('news.show', compact(['news', 'category']));
    }

    public function create()
    {
        $categories = Category::all();
        return view('news.create', compact('categories'));
    }
}
