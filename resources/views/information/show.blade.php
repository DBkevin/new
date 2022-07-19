@section("title",$zs->seotitle??$zs->title)
@extends('layouts.default')
@section('content')
@include('layouts._IndexAndDoctorMenu')
<!--列表-->
<ul class="h-9 w-full bg-white ">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('zsIndex')}}">整形知识</a>><a href="{{route('zsShow',[$zs->id])}}">{{$zs->title}}</a>
	</li>
</ul>
<div class="w-cen mx-auto">
	<ul class="w-article-zx flex-wrap items-centent flex">
		<li class="items-center flex ">
			<div class="concat-img">
				<img src="/images/cont1.png" alt="">
			</div>
			<div class="concat-info">
				<span>快速咨询</span>
				<span>1分钟快速解答</span>
			</div>
		</li>
		<li class="items-center flex ">
			<div class="concat-img">
				<img src="/images/cont2.png" alt="">
			</div>
			<div class="concat-info">
				<span>整形价格查询</span>
				<span>免费查询真实价格</span>
			</div>
		</li>
		<li class="items-center flex ">
			<div class="concat-img">
				<img src="/images/cont3.png" alt="">
			</div>
			<div class="concat-info">
				<span>真实案例</span>
				<span>真实反馈案例查询</span>
			</div>
		</li>
		<li class="items-center flex ">
			<div class="concat-img">
				<img src="/images/cont4.png" alt="">
			</div>
			<div class="concat-info">
				<span>整形医院</span>
				<span>整形医院哪家好</span>
			</div>
		</li>
	</ul>
	<div class="w-article  bg-white border-b border-gray-300 text-2xl text-black  overflow-x-hidden">
		<h1 class="mt-7 pl-9 tracking-normal mb-3">{{$zs->title}}</h1>
		<div class="mb-4  pl-9 text-sm flex justify-between text-gray-500 ">
			<div class="flex items-center ">
				<span class="flex items-center justify-start pr-3 inline-block">
					<a href="{{route('doctorShow',[$zs->doctor->id])}}" class="mr-3 rounded-full w-10 h-10 overflow-hidden">
						<img calss="rouded-full" src="/storage/{{$zs->doctor->picture}}" alt="">
					</a>
				</span>
				<span class="flex flex-col items-start">
					<a href="{{route('doctorShow',[$zs->doctor->id])}}" class="divide-x divide-grey-500"><span class="text-l mr-2 text-gray-700">{{$zs->doctor->name}}</span><span class=" pl-2 text-gray-400 ">{{$zs->doctor->title}}</span></a>
					<span class="text-sm text-grey-400"> 厦门美莱医疗美容医院</span>
				</span>
			</div>
			<div class="flex items-center mt-6 divide-x divide-grey-900 divide-opacity-100">
				<span class="px-1">
					<i class="ml-10 text-red-600">3000</i>
					次阅读
				</span>
				<span class="px-1">{{$zs->created_at}}</span>
			</div>
			<div class="flex items-center mt-6">
				<span>
					<span style="background:url(/images/small-icon.png) ;margin-right:5px;vertical-align:sub;display:inline-block;width:18px;height:14px;background-position:-93px 0"></span>
					医美科普
				</span>
				<div class="flex items-center justify-center text-white m-1 bg-bashColor h-7 cursor-pointer  w-25 rounded-2xl">
					<img src="/images/zixun.svg" style="width:22px;margin-right:5px;"alt="">
					在线资讯
				</div>
			</div>
		</div>
	</div>
	<div class="w-article bg-white pt-8 pr-10 pb-14 pl-10 overflow-hidden text-xl">
			{!!$zs->body!!}
	</div>
</div>
@endsection