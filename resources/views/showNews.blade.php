@extends('layouts.default')

@section('content')
<div class="section1 mx-auto xl">
	<div class="w-1240 h-16 py-4 mx-auto leading-loose text-gray-600">
		当前位置：<a href="/" class="text-gray-600">{{config('app.name')}}</a><span>></span> <a href="/{{$topic->slug}}"  class="text-gray-600" >{{$topic->title}} </a><span>></span><span>{{$new->title}}</span>
	</div>
	<div class="w-1240 py-2 mx-auto flex flex-row flex-nowrap border-solid divide-gray-400 border-t ">
		<div class="w-2/3 border-solid border border-t-0 border-l-0  ">
				<h2 class="text-center text-black text-3xl border-b-2 py-4">{{$new->title}}</h2>
				<p class="text-left text-sm text-gray-500 my-4">{{$new->created_at}} 
					&nbsp;&nbsp;文章来源:厦门美莱医疗美容医院
				</p>
				<div class="div">
					{!! $new->body!!}
				</div>
		</div>
		<div class="w-1/3"></div>
	</div>
</div>

@endsection