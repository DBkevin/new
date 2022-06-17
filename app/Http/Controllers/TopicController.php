<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
class TopicController extends Controller
{
    //
    public function show(Request $request,Topic $topic)
    {
     
        $topic=Topic::find($request->id);
        dd($topic);
        return view('Topic.show',['topic'=>$topic]);
    }
}
