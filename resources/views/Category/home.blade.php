@section("title","整形项目大全")
@section("keywords","整形项目大全")
@section("description","整形项目大全")
@extends('layouts.default')
@section('content')
@section('body-bg','bg-while')
@include('layouts._CategoryAndTopicMenu')
<div class="w-full h-420px mx-auto" style="background:url('/images/ban_1.jpg') center">
</div>
<div class="w-cen  bg-while  h-auto border-solid border-white border-t pt-8 pb-4 mx-auto">
	<div class="text-666 w-full py-4 text-base">
		<i class="w-p30 h-p30 inline-block mr-3 align-bottom" style="background:url('/images/master.png');background-size:200px 200px;background-position:-64px 0;"></i>
		<h3 class="inline-block text-xll text-333 mr-4 ">优质项目推荐</h3>
		<span class="text-xll mr-1 font-thin">/</span>
		精选优质好项目
	</div>
	<ul class="flex justify-between flex-wrap">
		@foreach($topics as $topic)
		<li class="w-580px h-60 mb-10 border text-666 text-base shadow-project hover:border-bbf3f7 relative border-white overflow-hidden">
			<a href="{{route('showTopic',[$topic->id])}}" class="w-full h-full block">
				<img src="/storage/{{$topic->picture}}" alt="{{$topic->title}}" class="block w-full" style="object-fit: scale-down;">
				<p class="absolute z-30 text-2xl font-bold left-6 top-4">
					{{$topic->title}}
				</p>
			</a>
		</li>
		@endforeach
	</ul>
	{{ $topics->links() }}
</div>
@endsection