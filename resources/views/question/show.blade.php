@section("title",$question->title)
@section("keywords",$question->keywords??'')
@section("description",$question->description??'')
@extends('layouts.default')
@section('content')
@include('layouts._IndexAndDoctorMenu')
<!--列表-->
<ul class="h-9 w-full bg-white ">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('questionIndex')}}">整形知识</a>><a href="{{route('questionShow',[$question->id])}}">{{$question->title}}</a>
	</li>
</ul>
<div class="w-cen mx-auto flex justify-between">
	<div>
		<ul class="w-article-zx flex-wrap items-centent flex">
			<li class="items-center flex ">
				<div class="concat-img">
					<img src="/images/cont1.png" alt="">
				</div>
				<div class="concat-info">
					<span>快速咨询</span>
					<span>1分钟快速解答</span>
				</div>
			</li>
			<li class="items-center flex ">
				<div class="concat-img">
					<img src="/images/cont2.png" alt="">
				</div>
				<div class="concat-info">
					<span>整形价格查询</span>
					<span>免费查询真实价格</span>
				</div>
			</li>
			<li class="items-center flex ">
				<div class="concat-img">
					<img src="/images/cont3.png" alt="">
				</div>
				<div class="concat-info">
					<span>真实案例</span>
					<span>真实反馈案例查询</span>
				</div>
			</li>
			<li class="items-center flex ">
				<div class="concat-img">
					<img src="/images/cont4.png" alt="">
				</div>
				<div class="concat-info">
					<span>整形医院</span>
					<span>整形医院哪家好</span>
				</div>
			</li>
		</ul>
		<div class="w-article-zx  cursor-default bg-white text-back text-black  relative overflow-x-hidden mt-6 ">
			<span class="w-8 h-7 absolute top-0 left-2.5" style="background-image: url('/images/question1.png');"></span>
			<div class="pt-p30 pb-p30 pl-p40 pr-p40">
				<h1 class="text-xl ">{{$question->title}}</h1>
				<p class="mt-5 text-bash">{{$question->qbody}} </p>
				<div class="flex flex-nowrap justify-between text-sm text-999 mt-7">
					<span>匿名 <i style="background-image: url('/images/question_sex.png');background-size:cover;" class="align-middle w-5 h-5 inline-block"></i>
					</span>
					<span>{{$question->qage}}岁</span>
					<span> <i style="background-image: url('/images/question_add.png');background-size:cover;" class="align-middle w-5 h-5 inline-block"></i>{{$question->qaddress}}</span>
					<span>关注人数：{{$question->qcount}}</span>
					<span>{{$question->created_at}}</span>
					<span> <i style="background:url(/images/small-icon.png) ;margin-right:5px;vertical-align:sub;display:inline-block;width:18px;height:14px;background-position:-93px 0" class="align-middle w-5 h-5 inline-block"></i>{{$question->topic->title}}</span>
				</div>
			</div>
		</div>
		<div class="w-article-zx  h-auto cursor-default bg-white text-back text-black  relative overflow-x-hidden mt-6 ">
			<span class="w-8 h-7 absolute top-0 left-2.5" style="background-image: url('/images/question2.png');"></span>
			<div class="pt-p30 pb-p30 pl-p40 pr-p40">
				<h1 class="text-xl flex justify-between items-center"> <span>最佳回答</span><span class="text-999 text-sm">本答案由<a href="{{route('doctorIndex')}}" class="text-bashColor">整形医生</a>提供</span></h1>
				<div class="mt-4 mb-4 flex justify-between ">
					<img src="/storage/{{$question->doctor->picture}}" class="w-16 h-16 rounded-full mr-4" alt="">
					<div class="flex flex-col w-full h-16 justify-between">
						<span class="flex justify-between items-center ">
							<span class="text-999 text-base">
								<span class="text-bashColor text-xl">{{$question->doctor->name}}</span>
								<span>{{$question->doctor->title}}</span>
							</span>
							@include('layouts.zixu')
						</span>
						<span class="text-sm text-999">
							厦门美莱医疗美容医院
						</span>
					</div>
				</div>
				<p class="mt-4 mb-4 text-base leading-7 text-999">
					{!!$question->abody!!}
				</p>
				@include("layouts._showBanner")
			</div>
		</div>
		<div class="w-article-zx  h-auto cursor-default bg-white text-back text-black  relative overflow-x-hidden mt-12 ">
			<div class="pt-p30 pb-p30 pl-p40 pr-p40">
				<h1 class="text-xl">最新整形咨询</h1>
				<ul class="flex flex-wrap mt-5">
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
					<li class="w-61 h-50.5 mr-2.5 overflow-hidden border hover:shadow-lg  hover:text-question flex flex-noworp flex-col justify-center ">
						<span class="overflow-ellipsis overflow-hidden p-p30 text-center " style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical">牙齿隐形矫正一般需要多少钱</span>
						<span class="text-center">2022-07-20 12:29:52</span>
					</li>
				</ul>
			</div>

		</div>
	</div>
	<div class="w-1/4 mt-p30 ">
		@include('layouts._showRightList')
	</div>
</div>
@endsection