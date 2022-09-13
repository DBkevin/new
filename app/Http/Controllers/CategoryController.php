<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;

class CategoryController extends Controller
{
    public function Index(Request $request, Category $category)
    {
        $topics = DB::table('topic', "p")
            ->select('p.id as par_id',  'c.id as c_id', 'c.title as c_title', 'p.title as par_title')
            ->where('p.category_id', $category->id)
            ->rightJoin('topic as c', 'p.id', '=', 'c.parent_id')->get();
        $t = [];
        foreach ($topics as $topic) {
            $res = array_search($topic->par_id, array_column($t, 'par_id'), true);
            if ($res !== false) {
                array_push($t[$res]['child'], ['id' => $topic->c_id, 'name' => $topic->c_title]);
            } else {
                array_push($t, ["name" => $topic->par_title, "par_id" => $topic->par_id, "child" => [['id' => $topic->c_id, 'name' => $topic->c_title]]]);
            }
            $res = null;
        }
        $topics = null;
        $topics = $t;
        if ($topics == null) {
            $topics = DB::table('topic', "p")->select('p.id as par_id', 'p.title as par_title')->where('p.category_id', $category->id)->get();
            $d = [];
            foreach ($topics as $topic) {
                $d[] = ['name' => $topic->par_title, 'par_id' => $topic->par_id, "child" => []];
            }
            $topics = $d;
        }
        return  view('Category/index', compact('category', 'topics'));
    }
    public function Home(Request $request)
    {
        $topics = Topic::without(['Category', 'Notice', 'Introtdtion', 'Info'])->whereNotNull('parent_id')->select('id', 'picture', 'title')->paginate(10);
        return  view('Category/home', compact('topics'));
    }
}
