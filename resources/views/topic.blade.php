@extends('layouts.default')

@section('content')
<div class="section1 mx-auto xl">
	<div class="w-1240 h-16 py-4 mx-auto leading-loose text-gray-600">
		当前位置：<a href="/" class="text-gray-600">厦门美莱医疗美容医院</a><span>></span> <a href="{{$topic->slug}}" class="text-gray-600">{{$topic->title}} </a><span>></span>
	</div>
	<div class="w-1240 py-2 mx-auto flex flex-row flex-nowrap border-solid divide-gray-400 border-t ">
		<ul class="w-2/3">
			@foreach($topic->news as $new)
			<li class="w-full overflow-hidden rounded-xl border-white shadow-3xl h-100 my-4  ">
				<div class="m-2 flex flex-row flex-nowarp ">
					<img src="{{asset('img/list_ico.jpg')}}" alt="" class="h-20">
					<a href="/{{$topic->slug}}/{{$new->id}}" class="text-black">
						<h2>{{$new->title}}</h2>
						<p class="truncate">{{$new->description}}</p>
					</a>
				</div>
			</li>
			<div class="clear"></div>
			@endforeach
		</ul>
		<div class="w-1/3"></div>
	</div>
</div>

@endsection