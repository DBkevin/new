<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class newsController extends Controller
{
    //
    public function index(){
        $news=News::all();
        return view('news',compact('news'));
    }
    public function show(News $new,$id){
            $show=News::find($id);
        return view('show',compact('show'));
    }
}
