@section('title',$curr->title.'整形攻略/常识_')
@section('keywords',$curr->title."整形攻略,".$curr->title."整形常识")
@section('description',$curr->title."整形攻略，提供".$curr->title."的手术方法、注意事项、适合人群、整形效果以及风险等详细介绍，带着美莱攻略走，整形路上不用愁！")
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="h-9 w-full bg-headbg  border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-333 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('NewsIndex')}}">整形攻略</a>><span class="text-999">{{$curr->title}}攻略</span>
	</li>
</ul>
<div class="w-cen mx-auto mt-8 flex ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft">
			<div class="mr-p30 pt-7.5 pb-7.5 pl-8 pr-8 bg-newsListBG rounded text-999 text-bash overflow-hidden w-full flex flex-wrap items-center justify-start ">
				<span class="rounded py-px px-1 align-center inline-block mr-4 mb-4.25 text-white bg-bashColor ">
					<a href="{{route('NewsList',[$parent->dirname])}}">全部</a>
				</span>
				@foreach($sibling as $item)
				@if($item->title ==$curr->title)
				<span class="rounded py-px px-1 align-center inline-block mr-4 mb-4.25 text-white bg-bashColor ">
					@else
					<span class="rounded py-px px-1 align-center inline-block mr-4 mb-4.25  hover:text-666 hover:bg-newsListHover">
						@endif
						<a href="{{route('NewsList',[$item->dirname])}}">{{$item->title}}</a>
					</span>
					@endforeach
			</div>
			<div class="w-full py-2.5 border-t border-b">
				<span class="ml-2 text-sm">
					{{$curr->title}}全部攻略共 <span class="text-doctor">{{$news->total()}}</span>篇
				</span>
			</div>
			<ul class="w-full overflow-hidden">
				@foreach($news as $item)
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="{{route('NewsShow',[$item->id])}}" class="block w-200 h-150 overflow-hidden">
						<img src="/storage/{{$item->picture}}" alt="{{$item->title}}" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="{{route('NewsShow',[$item->id])}}" class="text-333 text-lg w-full block">
							{{$item->title}}
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">{{$item->created_at->format('Y/m/d')}}</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>{{$item->count}}次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">
							{{$item->description}}
						</p>
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