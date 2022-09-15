<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Services\IsMobile;
use App\Models\Topic;

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
    /**
     * 需要加一条路由,先注释
     * 
     */
    public function addDoctor() 
    {
        $file = fopen(base_path('./123.txt'), "r");
        while (!feof($file)) {
            $a = trim(fgets($file));
            //转数组
            $arr = explode(",", $a); //转为数组
            $tagsArr = array_slice($arr, 6); //截取数组,
            array_filter($tagsArr); //数组去空
            $tagsID = Topic::whereIn('title', $tagsArr)->pluck('id')->toArray(); //对应
            $doctor = new Doctor();
            $picture = "doctor/" . $arr[1] . ".jpg";
            $doctor->name = $arr[0];
            $doctor->picture = $picture;
            $doctor->title = $arr[2];
            $doctor->age = $arr[3];
            $doctor->introduce = $arr[4];
            $doctor->school = $arr[5];
            $doctor->save();
            $doctor->tags()->attach($tagsID);
            $a=null;
            $tagsArr=null;
            $tagsID=null;
            $doctor=NULL;
            $picture=null;

        }
    }
}
