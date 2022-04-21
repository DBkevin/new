<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $Categories=Category::all(); 
        return view('index',compact('Categories'));
        //return view('MIndex',compact('Categories'));
    }
}
