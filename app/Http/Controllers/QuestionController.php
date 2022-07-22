<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function index(Question $Question)
    {
        $zs = Question::all();
        return view('question.index', compact('zs'));
    }
    public function show(Request $request)
    {
        $question = Question::findOrFail($request->id)->load("doctor");
        return view('question.show', compact('question'));
    }
}
