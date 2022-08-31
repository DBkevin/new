@section('headCss')
<link href="/css/m_index.css" rel="stylesheet">
@endsection
@section('title','整形攻略_整形美容咨询_整形问答-')
@section("keywords",'整形攻略')
@section("description",'美莱整形攻略栏目，为整形美容爱好者提供各种整形项目的整形信息、整容整形行业信息，让您从医生医院等多种角度了解更多的整形行业的动态。')
@extends('Mobies.layouts.default')
@section('content')

<div class="w-full h-auto bg-white m-hot mx-auto">
	@if(isset($category))
	<div class="flex justify-start">
		<span></span>
		<span>整形攻略分类</span>
	</div>
	<div class="flex items-center m-hot-tag p-0 flex-wrap">
		@foreach($category as $item)
		@foreach($item->topics as $topic)
		<span class="overflow-hidden">
			<a href="{{route('NewsList',[$topic->dirname])}}" target="_black" class="text-666 ">
				{{$topic->title}}
			</a>
		</span>
		@endforeach
		@endforeach
	</div>
@else
	<ul class="text-999">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('NewsIndex')}}">整形攻略</a>><span >{{$curr->title}}攻略</span>
	</ul>
@endif
</div>
<div class="w-full h-auto bg-white center mx-auto overflow-hidden">
	<div class="flex justify-start">
		<span></span>
		<span>最新攻略</span>
	</div>
	@foreach($newsTop as $item)
	<a href="{{route('NewsShow',[$item->id])}}" class="truncate  block border-b">
		<div class="w-full">
			<div class="text-333 overflow-hidden">
				{{$item->title}}
			</div>
			<div class="w-full flex justify-start">
				<span>专家</span>
				<span class="text-666">{{$item->doctor->name}}</span>
				<i>/</i>
				<div>{{$item->doctor->title}}</div>
			</div>
		</div>
	</a>
	@endforeach
</div>
<div class="w-full h-8 bg-white">
</div>
@endsection