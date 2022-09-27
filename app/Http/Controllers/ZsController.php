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
        $Mobile = IsMobile::isMobile();
        if ($Mobile) {
            return view('Mobies.Zs.index', compact('category'));
        } else {
            $zs = Information::all();
            return view('information.index', compact('zs', 'category'));
        }
    }
    public function list(Request $request)
    {
        $dirname = $request->dirname;
        //判断是category 还是topic
        $dir = Category::where('dirname', $dirname)->first();

        if ($dir) {
            //是顶级大栏目id就是大栏目ID
            //查找所有下级
            $category = Category::with(['topics' => function ($query) {
                $query->whereNull('parent_id');
            }])->where('id', $dir->id)->get();
            $category = $category[0]['topics']; //提取2个
            $parent = $dir;
            $curr = $parent;
            $parent_id = $category->pluck('id')->toArray();
            $zs = Information::wherein('topic_id', $parent_id)->with(['doctor'])->orderBy('created_at', 'desc')->take(10)->get();
            //然后判断是否不是手机端
            $Mobile = IsMobile::isMobile();
            if ($Mobile) {
                return view('Mobies.Zs.listDir', compact('dir', 'category', 'zs'));
            }
            //查询所有zs和分类
            return view('information.index', compact('category', 'curr', 'zs'));
        } else {
            $curr = Topic::where('dirname', $dirname)->withOut('Info')->first();
            $parent=$curr;
            $zs = Information::where('topic_id', $curr->id)->paginate(10);
            $Mobile = IsMobile::isMobile();
            if ($Mobile) {
                return view('Mobies.Zs.list', compact('curr', 'zs'));
            }
            return view("information.list", compact('curr', 'parent', 'zs'));
        }
    }
    public function show(Request $request)
    {
        $zs = Information::findOrFail($request->id)->load("doctor");
        $Mobile = IsMobile::isMobile();
        if ($Mobile) {
            $new = $zs;
            $type = 123;
            return view('Mobies.News.show', compact('new', 'type'));
        }
        return view('information.show', compact('zs'));
    }
}
