<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    //
    public function show( Topic $topic)
    {
        if(!$topic->parent_id){
            $a=Topic::without(['Category','Notice','Introtdtion','Info'])->with('Child')->find($topic->id);
            $child=$a->Child;
            return view('Topic.show', compact('topic','child'));
        }else{
        return view('Topic.show', compact('topic'));
        }
    }
}
