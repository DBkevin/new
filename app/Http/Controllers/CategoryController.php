<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function Index(Request $request)
    {
       return  view('Category/index');
    }
}
