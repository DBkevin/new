<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;


class TopicControlle extends Controller
{

    public function index()
    {
        $topics = Topic::without(['Category', 'Notice', 'Introtdtion', 'Info'])->whereNull('parent_id')->pluck('id','title');
        return response()->json($topics);
    }
    public function getDoctor(Request $request){
            dd($request->name);
    }
}
