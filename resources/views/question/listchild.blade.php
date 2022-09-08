@section('title',$dir->title.'最新问答_')
@section('keywords',$dir->title."最新问答,".$dir->title."最新问题")
@section('description',$dir->title."最新问答，提供".$dir->title."的手术方法、注意事项、适合人群、整形效果以及风险等详细介绍等问答，带着美莱攻略走，整形路上不用愁！")
@extends('layouts.default')
@section('body-bg','bg-white')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="h-9 w-full bg-headbg  border-t border-headBor border-solid ">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-333 text-sm ">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('questionIndex')}}">整形咨询</a>><span class="text-999">{{$dir->title}}咨询</span>
	</li>
</ul>
<div class="w-cen mx-auto mt-8 flex  ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft ">
			<div class="w-full py-2.5 border-t border-b">
				<span class="ml-2 text-sm">
					{{$dir->title}}全部攻略共 <span class="text-doctor">{{$questions->total()}}</span>篇
				</span>
			</div>
			<ul class="w-full overflow-hidden">
				@foreach($questions as $item)
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between text-666">
					<a href="{{route('questionShow',$item->id)}}" class="listchilda inline-block hover:text-bashColor ellipsis overflow-ellipsis whitespace-normal">
						{{$item->title}}
					</a>
					<div>
						<span class="listchildspan">已解决</span>
						<span>1个回答</span>
						<span>{{$item->created_at->format('Y-m-d')}}</span>
					</div>
				</li>
				@endforeach
			</ul>
			{{$questions->links()}}
		</li>
		<li class="w-tcright">
			@include('layouts._listzixun')
		</li>
	</ul>

	<style>
		.listchilda::before {
			content: '';
			display: inline-block;
			margin: 0 10px;
			width: 8px;
			height: 8px;
			background-color: #ccc;
			border-radius: 50%;
			vertical-align: middle;
		}

		.listchildspan::before {
			content: "√";
			background-color: #f79c00;
			display: inline-block;
			color: #fff;
			width: 20px;
			height: 20px;
			margin-right: 10px;
			vertical-align: middle;
			border-radius: 50%;
			text-align: center;
			line-height: 20px;
		}
	</style>
</div>

<div class="clear-both"></div>
@endsection