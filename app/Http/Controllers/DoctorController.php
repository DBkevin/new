<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Services\IsMobile;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctors =  Doctor::all();
        $isMobie = IsMobile::isMobile();
        if ($isMobie) {
            return view('Mobies.doctor.index', compact('doctors'));
        }
        return view('doctor.index', compact('doctors'));
    }
    public function show(Request $request, Doctor $doctor)
    {
        $doctor = Doctor::find($request->id);
        $isMobie = IsMobile::isMobile();
        if ($isMobie) {
            return view('Mobies.doctor.show', compact('doctor'));
        }
        return view('doctor.show', compact('doctor'));
    }
}
