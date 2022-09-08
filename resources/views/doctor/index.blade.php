@section('title','医生')
@section('body-bg','bg-white')
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<div class="w-full h-doctor-ban mx-auto  relative">
	<ul class="w-full mx-auto">
		<li class="h-doctor-ban" style="background:url('/images/doctor-ban.jpg') center">
		</li>
	</ul>
</div>
<div class="w-cen mx-auto mt-2 pt-2 h-auto">
	<div class="w-full h-15 leading-15 flex  flex-nowrap flex-row justify-items-start items-center">
		<span class="block w-7 h-8 mr-3.5" style="background-image:url('/images/doctor_icon.png');background-repeat: no-repeat;background-size: 90px 31px;"></span>
		<span class="block mr-3.5 text-doctor text-2xl"> 名医推荐</span>
		<span class="text-gray-200 mr-2">/</span>
		<span class="text-gray-400 leading-12 text-sm">好医生是安全变美的保障</span>
	</div>
	<ul class="flex flex-wrap flex-row justify-between  items-center w-full h-auto">
		@foreach($doctors as $doctor)
		<li class="w-doctor-item-w h-doctor-item-h border flex items-center  mb-4">
			<a href="{{route('doctorShow',[$doctor->id])}}" target="_blank" class="flex flex-col items-center w-full ">
				<img src="/storage/{{$doctor->picture}}" alt="" class="w-40 h-40 rounded-full">
				<h2 class="text-lg my-1.5">{{$doctor->name}}</h2>
				<p class="text-sm text-gray-400 my-1.5"> {{$doctor->title}}| 厦门美莱医疗美容医院</p>
				<p class="text-sm text-gray-400 my-1.5">执业年限:{{$doctor->age}}</p>
			</a>
		</li>
		@endforeach
	</ul>
</div>
<div class="clear-both"></div>
@endsection