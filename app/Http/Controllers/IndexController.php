<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Services\IsMobile;
class IndexController extends Controller
{
    //
    public function Index()
    {
        $category = DB::table('category')->select('id', 'title', 'picture')->groupBy('id')->get()->toArray();
        $topicsPar = DB::table('topic')->select('id', 'title', 'category_id')->whereNull('parent_id')->get();
        $topicsChild = DB::table('topic')->select('id', 'title', 'parent_id', 'category_id')->whereNotNull('parent_id')->get();
        $t = [];
        foreach ($topicsPar as $topic) {
            $newTopic = $this->setArr($topic);
            $CateIndex = array_search($newTopic['category_id'], array_column($t, 'id'));
            if ($CateIndex !== false) {
                array_push($t[$CateIndex]['child'], [
                    'par_id' => $newTopic['id'],
                    'par_title' => $newTopic['title'],
                    'child' => []
                ]);
            } else {
                $t[] = array_merge($this->setArr($category[array_search($newTopic['category_id'], array_column($category, 'id'))]), array(
                    'child' => array(
                        [
                            'par_id' => $newTopic['id'],
                            'par_title' => $newTopic['title'],
                            'child' => []
                        ],
                    ),
                ));
            }
        }
        foreach ($topicsChild as $topic) {
            $newTopic = $this->setArr($topic);
            //先检查cate_ID ,然后匹配到par_id
            $CateIndex = array_search($newTopic['category_id'], array_column($t, 'id'));
            $parentIndex = array_search($newTopic['parent_id'], array_column($t[$CateIndex]['child'], 'par_id'));
            array_push($t[$CateIndex]['child'][$parentIndex]["child"], ['c_id' => $newTopic['id'], "c_title" => $newTopic['title']]);
        }
        $categories = $t;
        $t = null;
        $isMobie = IsMobile::isMobile();
        if ($isMobie){
            return view('Mobies/home',compact('categories'));
        } else{
            return  view('home', compact('categories'));
        }
    }
    private function setArr($arr)
    {
        return json_decode(json_encode($arr), true);
    }
   
}
