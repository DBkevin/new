@section('title',$dir->title.'最新问答_')
@section('keywords',$dir->title."最新问答,".$dir->title."最新问题")
@section('description',$dir->title."最新问答，提供".$dir->title."的手术方法、注意事项、适合人群、整形效果以及风险等详细介绍等问答，带着美莱攻略走，整形路上不用愁！")
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="h-9 w-full bg-headbg  border-t border-headBor border-solid ">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-333 text-sm ">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('questionIndex')}}">整形咨询</a>><span class="text-999">{{$dir->title}}咨询</span>
	</li>
</ul>
<div class="w-full mx-auto   pt-8 bg-white">
	<div class="w-cen mx-auto flex justify-between">
		<ul class="w-tcleft flex justify-between">
			<ul class="w-40">
				@foreach($parents as $item)
				<li class="bg-f0f0f0 text-666 hover:bg-doctor hover:text-white border-b border-white hover:border-f0f0f0 h-12 text-bash leading-12 pl-7">
					{{$item->title}}
				</li>
				@endforeach
			</ul>
			<div class="w-700 overflow-hidden">
				<div class="w-full border-b border-gray-300 pb-3.5">
					<span class="w-10 h-10 inline-block  align-bottom" style="background: url('/images/question-master.png');background-size: 200px 200px;background-position:-52px -70px"></span>
					<span class="align-top text-333 ml-3 " style="font-size: 24px;">已解决{{$dir->title}}问题</span>
				</div>
				<ul class="mb-8">
					@foreach($zs as $item)
					<li class="border-b border-gray-300 pt-6 pb-4">
						<div class="text-666 truncate text-xl whitespace-nowrap hover:text-bashColor  ">
							<span class="w-7 h-7 mr-4 align-top inline-block" style="background: url('/images/question-master.png');background-size: 200px 200px;background-position:-102px -34px">
							</span>
							{{$item->title}}
						</div>
						<div class="mt-6 text-bash text-666 flex justify-between">
							<span class="w-1/10 inline-block text-sm" style="color:#5ac5e5">最佳回复：</span>
							<p class="w-9/10 overflow-ellipsis overflow-hidden h-auto" style="line-height: 24px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">
								{{$item->abody}}
							</p>
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
					</li>
					@endforeach

				</ul>
			</div>

		</ul>
		<div class="w-tcright">
			@include('layouts._listzixun')
		</div>
	</div>
	<div class="w-cen border-b border-gray-300 pb-3.5 mx-auto mt-8">
		<span class=" inline-block  align-bottom" style="background: url('/images/question-master.png');background-size: 200px 200px;background-position:0 -112px;width:29px ;height:32px"></span>
		<span class="align-top text-333 ml-3 " style="font-size: 24px;">最新{{$dir->title}}问题</span>
		<div class="w-cen mx-auto question-title overflow-hidden  mt-4">
			<ul class="flex w-full ">
				@foreach($parents as $item)
				<li class="bg-eee text-center h-36px w-91px  ml-px cursor-pointer overflow-hidden whitespace-nowrap " style="line-height:36px;font-size: 14px;">
					<a href="{{route('questionList',$item->dirname)}}" class=" ">{{$item->title}}</a>
				</li>
				@endforeach
			</ul>
			<div class="w-fuu mx-auto question-box mb-8 text-666 overflow-hidden">
				@foreach($questions as $items)
				<ul class="mt-3 w-full overflow-hidden hidden " id="menu-one">
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
					background-color: #ff9d00 !important;
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
		</div>
	</div>
</div>
<script>
	$(".question-title>ul>li:first").addClass("title-choose");
	$(".question-box >ul:first").show();
	$('.question-title>ul>li').hover(function() {
		let index = $(this).index(),
			id = $(".question-box").find('ul').eq(index).index();
		if (index === id) {
			$(this).addClass("title-choose").siblings().removeClass("title-choose");
			$(".question-box").find("ul").eq(index).show().siblings().hide();
		} else {
			return;
		}
	});
</script>

<div class="clear-both"></div>
@endsection