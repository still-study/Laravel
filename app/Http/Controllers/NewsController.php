<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->get();
        $categories = Category::all();
        return view('news.index', compact('news', 'categories'));

    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

}
