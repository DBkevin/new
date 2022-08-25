<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $isMobie = $this->isMobile();
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
    public function isMobile()

    {

        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备

        if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {

            return TRUE;
        }

        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息

        if (isset($_SERVER['HTTP_VIA'])) {

            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE; // 找不到为flase,否则为TRUE

        }

        // 判断手机发送的客户端标志,兼容性有待提高

        if (isset($_SERVER['HTTP_USER_AGENT'])) {

            $clientkeywords = array(

                'mobile',

                'nokia',

                'sony',

                'ericsson',

                'mot',

                'samsung',

                'htc',

                'sgh',

                'lg',

                'sharp',

                'sie-',

                'philips',

                'panasonic',

                'alcatel',

                'lenovo',

                'iphone',

                'ipod',

                'blackberry',

                'meizu',

                'android',

                'netfront',

                'symbian',

                'ucweb',

                'windowsce',

                'palm',

                'operamini',

                'operamobi',

                'openwave',

                'nexusone',

                'cldc',

                'midp',

                'wap'

            );

            // 从HTTP_USER_AGENT中查找手机浏览器的关键字

            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {

                return TRUE;
            }
        }
        if (isset($_SERVER['HTTP_ACCEPT'])) { // 协议法，因为有可能不准确，放到最后判断

            // 如果只支持wml并且不支持html那一定是移动设备

            // 如果支持wml和html但是wml在html之前则是移动设备

            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {

                return TRUE;
            }
        }

        return FALSE;
    }
}
