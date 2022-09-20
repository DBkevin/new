@section("title",$new->title)
@section("keywords",$new->keywords??'')
@section("description",$new->description??'')
@extends('layouts.default')
@section('content')
@include('layouts._IndexAndDoctorMenu')
<!--列表-->
<ul class="h-9 w-full bg-white border-t-2 border-bashColor ">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('NewsIndex')}}">整形攻略</a>><a href="{{route('NewsList',[$new->topic->dirname])}}">{{$new->topic->title}}攻略</a>><a href="{{route('NewsShow',[$new->id])}}">{{$new->title}}</a>
	</li>
</ul>
<div class="w-cen mx-auto flex justify-between">
	<div>
		@include('layouts._showTop')
		<div class="w-article-zx bg-white cursor-auto w-850px  h-auto">
			<div class="w-qsw mx-auto pt-px pb-p30">
				<h1 class="my-4 text-3xl font-normal">{{$new->title}}</h1>
				<div class="flex justify-between text-808080 text-sm leading-loose w-full overflow-hidden">
					<span><i class="text-bashColor mr-2.5 text-sm not-italic">{{$new->count}}</i>已浏览 | {{$new->created_at}}</span>
					@include('layouts.zixu')
				</div>
				<div class="flex justify-between text-999 text-sm leading-loose w-full overflow-hidden">
					关键词({{$new->keywords}})
				</div>
				<div class="h-px my-5 border-t w-full"></div>
				<img src="/storage/{{$new->picture}}" alt="" class="inline-block mr-7 5 w-180 h-28 overflow-hidden">
				<p class="inline-block mt-3 text-bash text-999 leading-7 w-560 float-right">
					<span class="text-333">导读：</span>{{$new->description}}
				</p>
			</div>
		</div>
		<div class="w-article-zx bg-white cursor-auto w-850px  h-auto">
			<div class=" mx-auto  pb-50 px-10 ">
				<ul class="pt-4 overflow-hidden leading-loose text-xl">
					{!!$new->body!!}
					@include("layouts._showBanner",["zs"=>$zs,"question"=>$question])
				</ul>
			</div>
		</div>
	</div>
	<div class="w-1/4 mt-p30 ">
		@include('layouts._showRightList',['bg'=>'bg-white'])
	</div>
</div>
@endsection