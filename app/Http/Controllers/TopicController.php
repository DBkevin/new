<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    //
    public function Index(Request $request)
    {
        return view('Topic.index');
    }
}
