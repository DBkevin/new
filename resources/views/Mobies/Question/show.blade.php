@section('headCss')
<link href="/css/m_question.css" rel="stylesheet">
@endsection
@section("title",$question->title)
@section("keywords",$question->keywords??'')
@section("description",$question->description??'')
@extends('Mobies.layouts.default')
@section('body-bg','bg-white')
@section('content')
<div class="w-full overflow-hidden" style="letter-spacing:0.02rem">
	<ul class="text-999  border-b" style="font-size: .24rem; line-height:1.2;padding:0.2rem;">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('questionIndex')}}">整形问答</a>><a href="{{route('questionList',$question->topic->dirname)}}">{{$question->topic->title}}></a><span class="text-999">详情页</span>
	</ul>
	<div class="center mx-auto">
		<img src="/m/images/mask.png" alt="" class="inline-block float-left">
		<h1 class="text-333 font-bold float-left">{{$question->title}}</h1>
		<div class="clear-both"></div>
		<div class="text-999 info">
			女，{{$question->qage}}岁 ，{{$question->qaddress}}
		</div>
		<div class="text-666 border-b qbody">
			{{$question->qbody}}
		</div>
		<div class="w-full text-999 pb-1 border-b">
			<div class="flex justify-between">
				@php
				$words=explode(",",$question->keywords);
				$words=array_slice($words,0,1)
				@endphp
				<span class="tag"><i>#</i>{{$words[0]}}<i class="text-white rounded-full not-italic text-right">></i></span>
				<div class="text-999">
					@php
					$readCoun=floor($question->qcount/3);
					@endphp
					<span>{{$readCoun}}</span>人咨询 &nbsp; ，我也要咨询
				</div>
			</div>
			<div class="text-999 mt-1 ">
				{{$question->created_at->format('Y-m-d')}} {{$question->qcount}} 人阅读
			</div>
		</div>
	</div>
	<div class="answer mx-auto">
		<div class="head flex justify-between">
			<img src="/storage/{{$question->doctor->picture}}" alt="" class="inline-block rounded-full ">
			<a href="{{route('doctorShow',[$question->doctor->id])}}" class="text-666 inline">
					<span class="text-333">{{$question->doctor->name}}</span>厦门美莱/{{$question->doctor->title}}
			</a>
			<a href="#" class="btn">免费咨询</a>
		</div>
		<div class="abody text-666">
			{{$question->abody}}
		</div>
	</div>
</div>
<div class="w-full h-8 bg-white">
</div>
@endsection