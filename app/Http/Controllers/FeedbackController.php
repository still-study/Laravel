<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', compact('feedbacks'));
    }

    public function create()
    {

    }

    public function store(StoreFeedbackRequest $request)
    {

        Feedback::create($request->validated());
        return redirect()->route('feedback.index')->with('success', 'Отзыв добавлен');
    }

}
