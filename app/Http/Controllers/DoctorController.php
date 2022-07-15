<?php

namespace App\Http\Controllers;

use App\Admin\Repositories\Commit;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index(){
        $doctors=  Doctor::all();
        return view('doctor.index',compact('doctors'));
    }
    public function show(Doctor $doctor){
        return view('doctor.show',compact('doctor'));
    }
}
