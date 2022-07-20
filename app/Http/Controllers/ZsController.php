<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class ZsController extends Controller
{
    //
    public function index(Information $information){
        $zs=Information::all();
        return view('information.index',compact('zs'));
    }
    public function show(Request $request){
        $zs=Information::find($request->id)->load("doctor");
        return view('information.show',compact('zs'));
    }
}
