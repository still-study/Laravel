<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $categories = $categories = Category::all();
        $news = $category->news()->get();
        return view('news.index', compact('news', 'categories'));
    }
}
