<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index(){
        $doctors=  Doctor::all();
        return view('doctor.index',compact('doctors'));
    }
    public function show(Request $request,Doctor $doctor){
        $doctor=Doctor::find($request->id);
        return view('doctor.show',compact('doctor'));
    }
}
