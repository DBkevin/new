<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Topic;

class SitemapController extends Controller
{
    //
    public function index()
    {
        $podcast = Topic::orderBy('updated_at', 'desc')->get();
                return response()->view('sitemap', [
            'posts' => $podcast,
        ])->header('Content-Type', 'text/xml');
    }
}
