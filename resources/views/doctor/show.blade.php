@section("title",$doctor->name)
@extends('layouts.default')
@section('content')
@section('body-bg','bg-white')
@include('layouts._IndexAndDoctorMenu')
<ul class="h-9 w-full bg-headbg border-b border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('doctorIndex')}}">找医生</a>><a href="{{route('doctorShow',['id'=>$doctor->id])}}">{{$doctor->name}}</a>
	</li>
</ul>
<!--列表-->
<div class="w-cen mx-auto">
	@include('layouts._showTop',['width'=>'w-full','wrap'=>'flex-nowrap','height'=>'h-24.5'])
	<ul class="flex flex-row flex-nowrap justify-between">
		<li class="w-tcleft">
			<div class="flex flex-nowrap">
				<img src="/storage/{{$doctor->picture}}" class="w-doctor-item-w h-doctor-item-w rounded-full" alt="">
				<div class="ml-8  flex  flex-col justify-center">
					<h1 class="text-2xl">{{$doctor->name}}</h1>
					<h2 class="text-sm"> {{$doctor->title}}</h2>
					<h3 class="text-sm">执业年限:{{$doctor->age}}</h3>
				</div>
			</div>
			<div class="mt-8 border-b pb-4 ">
				<h1 class="text-2xl border-b "><span class="inline-block border-b border-bashColor">医生信息</span></h1>
				<h2 class="text-xl  ml-4 pt-8 pb-4">{{$doctor->name}}</h2>
				<span class="text-999 ml-4"> 从业年限：{{$doctor->age}}</span>
			</div>
			<div class="mt-8 border-b pb-4">
				<h3 class="text-xl ml-4">职务:{{$doctor->title}}</h3>
				<h3 class="text-xl ml-4 pt-4">擅长项目:
					@foreach($doctor->tags as $item)
					<a href="{{route('showTopic',$item->id)}}"><span class="rounded-md font-semibold text-white bg-blue-500 inline-block px-2">{{$item->title}}</span> </a>
					@endforeach
				</h3>
			</div>
			<div class="mt-8 border-b pb-4 text-666">
				<h3 calss="text-xl ml-4"> <span class="text-333 text-2xl ml-4"> 个人简介:</span>{!!$doctor->introduce!!}</h3>
			</div>
		</li>
	</ul>

</div>
@endsection