@section("title",$doctor->name)
@extends('layouts.default')
@section('content')
<ul class="w-full navs-menu">
	<li class="w-cen mx-auto flex flex-nowrap align-content  items-center  justify-start ">
		<a href="/">首页</a>
		<a href="/">整形项目</a>
		<a href="/doctor">找医生</a>
		<a href="#">整形咨询</a>
		<a href="#">整形知识</a>
		<a href="#">整形攻略</a>
	</li>
</ul>

<ul class="h-9 w-full bg-headbg border-b border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('doctorIndex')}}">找医生</a>><a href="{{route('doctorShow',['id'=>$doctor->id])}}">{{$doctor->name}}</a>
	</li>
</ul>
<!--列表-->
<div class="w-cen mx-auto">
	<ul class="topic_concat flex flex-row  divide-x justify-start">
		<li>
			<div class="concat-img">
				<img src="/images/cont1.png" alt="">
			</div>
			<div class="concat-info">
				<span>快速咨询</span>
				<span>1分钟快速解答</span>
			</div>
		</li>
		<li>
			<div class="concat-img">
				<img src="/images/cont2.png" alt="">
			</div>
			<div class="concat-info">
				<span>整形价格查询</span>
				<span>免费查询真实价格</span>
			</div>
		</li>
		<li>
			<div class="concat-img">
				<img src="/images/cont3.png" alt="">
			</div>
			<div class="concat-info">
				<span>真实案例</span>
				<span>真实反馈案例查询</span>
			</div>
		</li>
	</ul>
	<ul class="flex flex-row flex-nowrap justify-between">
		<li class="w-tcleft">
				<div class="flex flex-nowrap">
					<img src="/storage/{{$doctor->picture}}" class="w-doctor-item-w h-doctor-item-w rounded-full" alt="">
					<div class="ml-6 " >
						<h1 class="text-2xl">{{$doctor->name}}</h1>
						<h2  class="text-sm"> {{$doctor->title}}</h2>
						<h3 class="text-sm">执业年限:{{$doctor->age}}</h3>
					</div>
				</div>
				<div class="mt-8 ">
						<h1 class="text-2xl border-b">医生信息</h1>
						<h2 class="text-xl  ml-4">{{$doctor->name}}</h2>
						<h3 class="text-xl ml-4">职务:{{$doctor->title}}</h3>
						<h3 calss="text-xl ml-4">个人简介{!!$doctor->introduce!!}</h3>

				</div>
		</li>
	</ul>
	
</div>
@endsection