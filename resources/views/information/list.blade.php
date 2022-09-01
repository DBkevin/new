@section('title',$curr->title.'整形攻略/常识_')
@section('keywords',$curr->title."整形攻略,".$curr->title."整形常识")
@section('description',$curr->title."整形攻略，提供".$curr->title."的手术方法、注意事项、适合人群、整形效果以及风险等详细介绍，带着美莱攻略走，整形路上不用愁！")
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="h-9 w-full   border-t border-headBor border-solid bg-white">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-333 text-sm ">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('zsIndex')}}">整形攻略</a>><a href="{{route('ZsList',[$parent->dirname])}}">{{$parent->title}}</a>><span class="text-999">{{$curr->title}}攻略</span>
	</li>
</ul>
<div class="w-cen mx-auto mt-8 flex ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft">
			<div class="w-full py-2.5 border-t ">
				<span class="ml-2 text-sm">
					{{$curr->title}}全部攻略共 <span class="text-doctor">{{$zs->total()}}</span>篇
				</span>
			</div>
			<ul class="w-full overflow-hidden">
				@foreach($zs as $item)
				<li class=" w-full h-auto border flex justify-between px-5 py-4 overflow-hidden border-question-zx bg-white mb-4  rounded-lg">
					<a href="{{route('zsShow',[$item->id])}}" class="overflow-hidden  w-200 h-27 block">
						<img src="{{$item->picture}}" alt="">
					</a>
					<div class="overflow-hidden w-580px">
						<a href="{{route('zsShow',[$item->id])}}" class="mt-2 bolck overflow text-333 text-lg">
							{{$item->title}}
						</a>
						<a href="{{route('doctorShow',[$item->doctor->id])}}"  class="mt-50 text-999 text-lg block">
							<span class="rounded-full mr-4 w-6 h-6 align-middle  inline-block overflow-hidden"><img src="/storage/{{$item->doctor->picture}}" alt=""></span>
							<span class="inline-block  leading-5"> {{$item->doctor->name}}</span>
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</li>
		<li class="w-tcright">
			@include('layouts._listzixun')
		</li>
	</ul>
</div>

<div class="clear-both"></div>
@endsection