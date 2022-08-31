<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Information;
use App\Models\Question;
use App\Services\IsMobile;

class NewsController extends Controller
{
    public function index(News $News)
    {
        $category = Category::with(['topics' => function ($query) {
            $query->whereNull('parent_id');
        }])->get();
        $isMobie = IsMobile::isMobile();
        if ($isMobie) {
            $newsTop = News::OrderBy('created_at', 'desc')->paginate(10);
            return view('Mobies.News.index', compact('category', "newsTop"));
        } else {
            $zs = Information::orderBy('created_at', 'desc')
                ->take(6)
                ->get();
            $question = Question::orderBy('created_at', 'desc')->take(8)->get();
            $newsTop = News::OrderBy('created_at', 'desc')->take(8)->get();
            News::whereIn('topic_id', $category[1])->take(6)->get();
            $list = $category->toArray();
            for ($i = 0; $i < count($list); $i++) {
                $ids = array_values(array_column($list[$i]['topics'], 'id'));
                $news = News::whereIn('topic_id', $ids)->take(6)->get()->toArray();
                $list[$i]['news'] = $news;
                $news = null;
                $ids = null;
            }
            return view('News.index', compact('zs', 'question', 'category', 'newsTop', 'list'));
        }
    }
    public function list(Request $request)
    {
        $dirname = $request->dirname;
        //判断是category 还是topic
        $dir = Category::where('dirname', $dirname)->first();
        if ($dir) {
            //是顶级大栏目id就是大栏目ID
            //查询所有新闻
            $parent = $dir;
            $curr = $parent;
        } else {
            //是Topic,就先去查一级
            $curr = Topic::where('dirname', $dirname)->withOut('Info')->first();
            $parent = Category::find($curr->category_id); //父级
        }
        $newsID = Topic::where('parent_id', $parent->id)->pluck('id')->toArray();
        $news = News::whereIn('topic_id', $newsID)->paginate(10);
        $sibling = Topic::where('category_id', $parent->id)->whereNull('parent_id')->select('id', 'dirname', 'title')->get();
         $isMobie = IsMobile::isMobile();
        if ($isMobie) {
            $newsTop=$news;
            return view('Mobies.News.index', compact("newsTop","curr"));
        }else{
        return view('News.list', compact('news', 'sibling',  'parent', 'curr'));
        }
    }
    public function show(Request $request)
    {
        $new = News::findOrFail($request->id);
        $isMobie = IsMobile::isMobile();
        if ($isMobie) {
            return view('Mobies.News.show', compact('new'));
        } else {
            $zs = Information::where("topic_id", $new->parent_id)->take(10)->get();
            $question = Question::where('topic_id', $new->parent_id)->take(10)->get();
            return view('News.show', compact('new', 'zs', 'question'));
        }
    }
}
