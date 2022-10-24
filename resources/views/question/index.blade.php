@section('title','整容咨询_整形美容咨询_整形问答-')
@extends('layouts.default')
@section('content')
@section('body-bg','bg-white')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<div class="w-full h-doctor-ban mx-auto  relative">
	<ul class="w-full mx-auto">
		<li class="h-doctor-ban" style="background:url('/images/ban_1.jpg') center no-repeat;background-size: cover;">
		</li>
	</ul>
</div>
<div class="w-cen mx-auto mt-8 flex ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft">
			<h1 class="pb-3 border-b text-2xl">
				<span class="inline-block mr-2 w-8 h-7 align-bottom" style="background-image:url('/images/question-master.png') ;background-size:200px,200px;background-position:-140px -35px"></span>
				优质咨询推荐
				<i class="text-white text-sm inline-block w-8 h-5 aligen-center absolute bg-question-top rounded-lg">精选</i>
			</h1>
			<ul>
				@foreach($zs as $item)
				<li class="pt-6 pb-4 w-full border-b border-question-border border-solid">
					<a href="{{route('questionShow',$item->id)}}">
					<div class="text-lg text-333 w-full truncate">
						<span style="background: url('/images/question-master.png'); background-position:-102px -34px;" class="inline-block w-7 h-7 mr-4   align-middle"></span>
						<a href="{{route('questionShow',[$item->id])}}">
							{{$item->title}}
						</a>
					</div>
					<div class="text-bash text-999 mt-6 flex justify-between">
						<span class="w-1/10 text-question-inde text-sm block ">
							最佳回复
						</span>
						<div class="w-9/10 overflow-ellipsis overflow-hidden h-auto" style="line-height: 24px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">
							{!!$item->abody!!}
						</div>
					</div>
					<div class="text-sm mt-6 text-999 flex justify-between">
						<span class="inline-flex ">
							<i style="background-image:url('/images/question-master.png');background-size:200px 200px;background-position:-56px -35px" class="inlike-block w-4 h-4 mr-2.5 align-sub"></i>
							<span>本答案由专业 &nbsp;</span>
							<a class="text-question-inde" href="{{route('doctorShow',[$item->Doctor->id])}}">{{$item->Doctor->name}}</a>
							<span>&nbsp;提供</span>
							<span class=" ml-3">发布于{{$item->created_at}}</span>
						</span>
						<span class="inline-flex">
							<i style="background-image:url('/images/question-master.png');background-size:200px 200px;background-position:-28px -35px" class="inlike-block w-4.5 h-4.5 mr-2 align-sub"></i>
							0
						</span>
					</div>
					</a>
				</li>
				@endforeach
			</ul>
			<div class="my-8">
				{{$zs->links()}}
			</div>
		</li>
		<li class="w-tcright">
			@include('layouts._listzixun')
		</li>
	</ul>
</div>
<div class="w-full mx-auto mt-8 flex bg-edf0f7">
	<div class="w-cen mx-auto">
		<h1 class="pb-3  text-2xl py-7.5">
			<span class="inline-block mr-2 w-8 h-7 align-bottom" style="background-image:url('/images/question-master.png') ;background-size:200px,200px;background-position:-140px -35px"></span>
			最新整形咨询
			<i class="text-white text-sm inline-block w-8 h-5 aligen-center absolute bg-question-top rounded-lg">精选</i>
		</h1>
		<style>
			.question-title>ul>li {
				font-size: 12px;
				line-height: 36px;
			}

			.question-title>ul>li:last-child {
				border-top-right-radius: 3px;
				border-bottom-right-radius: 3px;
			}

			.question-title>ul>li:first-child {
				margin-left: 0;
				border-top-left-radius: 3px;
				border-bottom-left-radius: 3px;
			}

			.question-title>ul>li.title-choose {
				background-color: #ff5959 !important;
				color: #fff;
			}

			.question-box>ul>li>a::before {
				content: '';
				display: inline-block;
				margin: 0 10px;
				width: 8px;
				height: 8px;
				background-color: #ccc;
				border-radius: 50%;
				vertical-align: middle;
			}

			.question-box>ul>li>div>span:first-child::before {
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

			.question-box>ul>li>div>span {
				margin-right: 12px;
			}

			.question-box>ul>li>div>span:last-child {
				margin-right: 0px;
			}
		</style>
		<div class="w-full mx-auto question-title overflow-hidden">
			<ul class="flex w-full ">
				@foreach($category as $item)
				<li class="bg-white text-center h-36px w-91px  ml-px cursor-pointer overflow-hidden">
					<a href="{{route('questionList',$item->dirname)}}">{{$item->title}}</a>
				</li>
				@endforeach
			</ul>
			<div class="add-menus">
				@foreach($category as $items)
				<ul class="text-666 border-b border-white mt-2 pb-1.5 w-full overflow-hidden text-xs leading-7 flex flex-wrap  justify-start hidden">
					@foreach($items->topics as $item)
					<li class="ml-25px inline-block hover:text-bashColor">
						<a href="{{route('questionList',$item->dirname)}}">
							{{$item->title}}
						</a>
					</li>
					@endforeach
				</ul>
				@endforeach
			</div>
		</div>
		<div class="w-fuu mx-auto question-box mb-8 text-666 overflow-hidden">
			@foreach($questions as $items)
			<ul class="mt-3 w-full overflow-hidden hidden" id="menu-one">
				@foreach($items as $item)
				<li class="text-666 py-2 w-full overflow-hidden text-base flex justify-between">
					<a href="{{route('questionShow',$item->id)}}" class="inline-block hover:text-bashColor ellipsis w-892 overflow-ellipsis whitespace-normal">
						{{$item->title}}
					</a>
					<div>
						<span>已解决</span>
						<span>1个回答</span>
						<span>{{$item->created_at->format('Y-m-d')}}</span>
					</div>
				</li>
				@endforeach
			</ul>
			@endforeach
		</div>
	</div>
</div>
<script>
	$(".question-title>ul>li:first").addClass("title-choose");
	$(".question-title>div>ul:first").show();
	$(".question-box >ul:first").show();
	$('.question-title>ul>li').hover(function() {
		let index = $(this).index(),
			id = $(".question-box").find('ul').eq(index).index(),
			twoMenu = $(".question-title>div").find("ul").eq(index).index();
		if (index === id) {
			$(this).addClass("title-choose").siblings().removeClass("title-choose");
			$(".question-box").find("ul").eq(index).show().siblings().hide();
			$(".question-title>div").find("ul").eq(index).show().siblings().hide();
		} else {
			return;
		}
	});
</script>

<div class="clear-both"></div>
@endsection