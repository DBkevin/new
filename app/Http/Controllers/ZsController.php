<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Category;
use App\Models\Topic;
use App\Services\IsMobile;

class ZsController extends Controller
{
    //
    public function index(Information $information)
    {
        $category = Category::with(['topics' => function ($query) {
            $query->whereNull('parent_id');
        }])->get();
        $zs = Information::all();
        return view('information.index', compact('zs', 'category'));
    }
    public function list(Request $request)
    {
        $dirname = $request->dirname;
        //判断是category 还是topic
        $dir = Category::where('dirname', $dirname)->first();
        if ($dir) {
            //是顶级大栏目id就是大栏目ID
            //查询所有zs和分类
            $parent = $dir;
            $curr = $parent;
            //查找所有下级
            $category = Category::with(['topics' => function ($query) {
                $query->whereNull('parent_id');
            }])->where('id', $dir->id)->get();
            $category = $category[0]['topics'];
            $zs = Information::all();
            return view('information.index', compact('category', 'curr'));
        } else {
            //是Topic,就先去查一级
            $curr = Topic::where('dirname', $dirname)->withOut('Info')->first();
            $parent = Category::find($curr->category_id);
            $zs=Information::where('topic_id',$curr->id)->paginate(10);
            return view("information.list",compact('curr','parent','zs'));
        }
        // $newsID = Topic::where('parent_id', $parent->id)->pluck('id')->toArray();
        // $news = Information::whereIn('topic_id', $newsID)->paginate(10);
        // $sibling = Topic::where('category_id', $parent->id)->whereNull('parent_id')->select('id', 'dirname', 'title')->get();
        // $isMobie = IsMobile::isMobile();

    }
    public function show(Request $request)
    {
        $zs = Information::findOrFail($request->id)->load("doctor");
        return view('information.show', compact('zs'));
    }
}
