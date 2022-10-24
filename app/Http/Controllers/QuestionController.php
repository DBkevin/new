<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Services\IsMobile;
use Illuminate\Http\Request;
use App\Models\Topic;
use stdClass;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    //
    public function index(Question $Question)
    {
        $zs = Question::with(['Topic'])->paginate(10);
        $category = Category::all();
        $Mobile = IsMobile::isMobile();
        if ($Mobile) {
            return view('Mobies.Question.index', compact('zs', 'category'));
        }
        $cateogry = Category::with(['topics' => function ($query) {
            $query->whereNull('parent_id');
        }])->get();
        $questions = [];
        foreach ($category as $item) {
            $questions[] = Question::whereIn('topic_id', $item->topics()->pluck('id')->toArray())->take(10)->get();
        }
        return view('question.index', compact('zs', 'category', 'questions'));
    }
    public function list(Request $request)
    {
        $category = Category::all();
        //判断是category 还是topic
        $dirname = $request->dirname;
        //判断是category 还是topic
        $dir = Category::where('dirname', $dirname)->first();
        $Mobile = IsMobile::isMobile();
        if ($Mobile) {
            $Parent = new stdClass;
            $Parent->dirname = false;
            if ($dir) {
                //是顶级大栏目id就是大栏目ID
                //查询所有新闻,需要把子级全部查出来
                $parents = Topic::where('category_id', $dir->id)->whereNull('parent_id')->get(); //所有的子级 大栏目
                //查找文章列表
                $zs = Question::whereIn('topic_id', $parents->pluck('id')->toArray())->paginate(10);
            } else {
                //不是大栏目,先把父级查出来
                $Parent = Topic::where('dirname', $dirname)->firstOrfail();
                $dir = Category::where('id', $Parent->category_id)->first(); //父级
                $parents = Topic::where('category_id', $dir->id)->whereNull('parent_id')->get(); //所有的子级 大栏目
                //查找文章列表
                $zs = Question::where('topic_id', $Parent->id)->paginate(10);
            }
            return view('Mobies.Question.index', compact('zs', 'category', 'parents', 'dir', 'Parent'));
        }
        
        if ($dir) {
            $parents = Topic::where('category_id', $dir->id)->whereNull('parent_id')->get(); //所有的子级 大栏目
            $zs = Question::whereIn('topic_id', $parents->pluck('id')->toArray())->paginate();
            $questions = [];
            foreach ($parents as $item) {
                $questions[] = Question::where('topic_id', $item->id)->take(10)->get();
            }
            return view('question.list', compact('zs', 'parents', 'dir', "questions"));
        } else {
            $dir = Topic::where('dirname', $dirname)->firstOrfail();
            $questions = Question::where('topic_id', $dir->id)->paginate();
            return  view('question.listchild', compact('dir', 'questions'));
        }
    }

    public function show(Request $request)
    {
        $question = Question::findOrFail($request->id)->load("doctor");
        $Mobile = IsMobile::isMobile();
        if ($Mobile) {
            return view('Mobies.Question.show', compact('question'));
        }
        //相关根据ID查询暂无,有了再改
        return view('question.show', compact('question'));
    }
}
