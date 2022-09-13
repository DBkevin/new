@section('headCss')
<link href="/css/m_doctor.css" rel="stylesheet">
@endsection
@section("title",$doctor->name."_".$doctor->title."怎么样?-")
@section("keywords",$doctor->keywords??'')
@section("description",$doctor->description??'')
@extends('Mobies.layouts.default')
@section('body-bg','bg-white')
@section('content')
<div class="w-full overflow-hidden" style="letter-spacing:0.02rem">
	<ul class="text-999  border-b" style="font-size: .24rem; line-height:1.2;padding:0.2rem;">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('doctorIndex')}}">找医生</a>><span class="text-999">{{$doctor->name}}详情页</span>
	</ul>
	<div class="doctorShow">
		<div class="doctorPic">
			<img src="/storage/{{$doctor->picture}}" class="w-full" alt="">
		</div>
		<div class="doctorInfo  text-center" style="letter-spacing:0.02rem">
			<h1 class="truncate">{{$doctor->name}}</h1>
			<h2 class="truncate text-white">{{$doctor->title}}</h2>
			<div class="tag flex justify-center ">
				<div class="flex items-center absolute">
					<span>执业{{$doctor->age}}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="doctorInfos w-full overflow-hidden text-666 ">
		<div class="">
			<h1 class="text-left">擅长项目</h1>
			<div class="overflow-hidden truncate">
				@foreach($doctor->tags as $item)
				<span>
					<i class="not-italic">#</i>
					{{$item->title}}
					@if($loop->last)
					@else
					<i class="not-italic text-999">/</i>
					@endif
				</span>
				@endforeach
			</div>
		</div>
		<div>
			<h1>医生简介</h1>
			<p>
				{{$doctor->introduce}}
			</p>
		</div>
	</div>
</div>
<div class="w-full h-8 bg-white">
</div>

@endsection