<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    //
    public function show(Request $request, Topic $topic)
    {
        $topic = Topic::findOrFail($request->id);
        //加载文字
        $zs=$topic->Information()->orderBy('created_at','desc')->take(2)->get();
        if (!$topic->parent_id) {
            $topicInfo = Topic::without(['Category', 'Notice', 'Introtdtion', 'Info'])->with('Child')->find($topic->id);
            $child = $topicInfo->Child;
            return view('Topic.show', compact('topic', 'child','zs'));
        } else {
            $child = Topic::without(['Category', 'Notice', 'Introtdtion', 'Info'])->with('Parent')->find($topic->parent_id)->Child()->Where('id', '!=', $topic->id)->get();
            return view('Topic.show', compact('topic', 'child','zs'));
        }
    }
}
