@section('headCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
@include('layouts._IndexAndDoctorMenu')
<div class="w-full h-420px banner mx-auto  relative">
	<ul class="w-full mx-auto">
		<li style="background:url('/images/ban_1.jpg') center">
		</li>
	</ul>
	<ul class="absolute">
		@foreach($categories as $category)
		<li class="flex flex-nowrap flex-row">
			<div class="nav_left">
				<i class="h-sprite ">
					<img src="/storage/{{$category['picture']}}" alt="">
				</i>
				<span>{{$category['title']}}</span>
			</div>
			<div class="nav_rigt">
				<ul class="wrap">
					@foreach($category['child'] as $partopic)
					<li class="wrap">
						<div class="wrap"><a href="{{route('showTopic',[$partopic['par_id']])}}" target="_blank" rel="nofollow">{{$partopic['par_title']}}<span class="right">&gt;</span></a></div>
						<div class="ft12 color6 mt14 ellipsis wd87 left">
							@foreach($partopic['child'] as $topic)
							<span class="mr12"><a href="{{route('showTopic',[$topic['c_id']])}}" target="_blank" rel="nofollow">{{$topic['c_title']}}</a></span>
							@endforeach
						</div>
						<span class="right rh-more"><a href="{{route('showTopic',[$partopic['par_id']])}}" target="_blank" rel="nofollow">更多&gt;&gt;</a></span>
					</li>
					@endforeach
				</ul>
			</div>
		</li>
		@endforeach
	</ul>
</div>
@endsection