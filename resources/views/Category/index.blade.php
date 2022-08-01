@section("title",$category->title)
@section("keywords",$category->keywords)
@section("description",$category->description)
@section('headCss')
<link href="/css/category.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')

@include('layouts._CategoryAndTopicMenu',['thisCategory'=>$category->title])
<div class="categoryBox bg-headbg w-full h-auto border-solid border-white border-t pt-8 pb-4 ">
	<ul class="categoryCen">
		@foreach($topics as $topic)
		<li class="cen-list ">
			<div class="w-full border-solid border-b border-gray-200 flex flex-row items-center pb-5 ">
				<span class="cen_title"><a href="{{route('showTopic',[$topic['par_id']])}}" target="_blank" alt="{{$topic['name']}}">{{$topic['name']}}</a></span>
				<span class="gray-ls"></span>
				<div class="wach-more"><a href="{{route('showTopic',[$topic['par_id']])}}" target="_blank" alt="{{$topic['name']}}">查看项目</a><span></span></div>
			</div>
			<ul class="mt-5 flex flex-row items-center">
				@foreach($topic['child'] as $item)
				<li class="mr-8 mb-4"><a href="{{route('showTopic',[$item['id']])}}" target="_blank" alt="{{$item['name']}}">{{$item['name']}}</a></li>
				@endforeach
			</ul>
		</li>
		@endforeach
	</ul>
</div>
@endsection