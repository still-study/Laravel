<?php

namespace App\Http\Controllers;

use app\engine\Db;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\NewsShowRequest;
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

    public function create()
    {
        $news = News::all();
        $categories = Category::all();
        return view('news.create', compact('categories', 'news'));
    }

    public function store(StoreNewsRequest $request)
    {
        News::create($request->validated());

        return redirect()->route('news.index')->with('success', 'Новость добавлена');
    }

    public function edit(News $news)
    {
        $newsAll = News::all();
        $categories = Category::all();
        return view('news.edit', compact('categories', 'news', 'newsAll'));
    }

    public function update(News $news, StoreNewsRequest $request)
    {
        //хотелось бы обновить как в методе Store, одной строкой...
        //но что то не пошло((
        //поэтому так
        $news->title = $request->title;
        $news->description = $request->description;
        $news->category_id = $request->category_id;
        $news->source = $request->source;
        $news->save();
        return redirect()->route('news.index')->with('success', 'Новость изменена');
    }

    public function delete(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Новость удалена');
    }
}

