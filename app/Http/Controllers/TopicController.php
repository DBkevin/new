<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\News;

class TopicController extends Controller
{
    public function index(Topic $topic)
    {
        return view('topic', compact('topic'));
    }
    public function show(Topic $topic, $id)
    {
       $new=News::find($id);
        return view('showNews', compact(['new', 'topic']));
    }
}
