<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;

class NewsController extends Controller
{
    //
    //
    public function index(News $News)
    {
        $zs = News::all();
        return view('News.index', compact('zs'));
    }
    public function list(Request $request)
    {
        $dirname = $request->dirname;
        $news = [];
        //判断是category 还是topic
        $dir = Category::where('dirname', $dirname)->first();
        if ($dir) {
        } else {
        }
        return view('News.list', compact('news'));
    }
    public function show(Request $request)
    {
        $new = News::findOrFail($request->id);
        return view('News.show', compact('new'));
    }
}
