@section('headCss')
<link href="/css/m_show.css" rel="stylesheet">
@endsection
@section("title",$new->title)
@section("keywords",$new->keywords??'')
@section("description",$new->description??'')
@extends('Mobies.layouts.default')
@section('body-bg','bg-white')
@section('content')
<div class="w-full overflow-hidden" style="letter-spacing:0.02rem">
	<div class="center mx-auto">
		<h1 class="text-333 font-bold">{{$new->title}}</h1>
		<div class="flex justify-start items-center">
			<a href="{{route('doctorShow',[$new->doctor->id])}}" class="overflow-hidden rounded-full">
				<img src="/storage/{{$new->doctor->picture}}" alt="">
			</a>
			<div class="flex  flex-col justify-between">
				<a href="{{route('doctorShow',[$new->doctor->id])}}" class="text-666 inline">
					{{$new->doctor->name}}
				</a>
				<a href="{{route('doctorShow',[$new->doctor->id])}}" class="text-666 inline">
					厦门美莱/{{$new->doctor->title}}
				</a>
			</div>
		</div>
		<div class="border-b flex justify-between">
			<div>
				<div class="text-666 flex flex-col">
					@php
					$words=explode(",",$new->keywords);
					$words=array_slice($words,0,2)
					@endphp
					@foreach($words as $item)
					<span class="flex flex-nowrap items-center justify-between"><i>#</i>{{$item}}<i class="text-white rounded-full not-italic text-right">></i></span>
					@endforeach
				</div>
				<div class="text-999">
					{{$new->created_at->format('Y-m-d')}}
				</div>
			</div>
			<div class="text-999 font-normal">
				@php
				$readCoun=floor($new->count/3);
				@endphp
				<span>{{$readCoun}}</span>人咨询 &nbsp; {{$new->count}}人阅读
			</div>
		</div>
	</div>
	<div class="bodycenter mx-auto overflow-hidden">
		@if(empty($type))
		<h1>导读</h1>
		<p class="text-666 mb-0">
			{{$new->description}}
		</p>
		@endif
		<div class="m-body" id="mBody">
			{!!$new->body!!}
		</div>
	</div>
</div>
<div class="w-full h-8 bg-white">
</div>
<script>
	$(function() {
		$("#mBody").find("div").css({
			"width": "",
		});
	})
</script>
@endsection