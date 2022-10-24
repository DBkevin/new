@section('headCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
@section('body-bg','bg-fafafa')
@include('layouts._IndexAndDoctorMenu')
<div class="w-full h-649px banner mx-auto  relative">
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
			<div class="nav_rigt hidden">
				<ul class="wrap ">
					@foreach($category['child'] as $partopic)
					<li class="wrap ">
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
<div class="IndexCen w-full bg-white">
	<div class="w-newCen mx-auto my-16">
		<ul class="w-full flex justify-between">
			<li class="flex ">
				<img src="/images/icon_1.jpg" alt="">
				<div class="flex flex-col ml-8">
					<span class="inline-block text-666 text-xl">专业深度</span>
					<span class="inline-block text-999 text-sm">Professional depth</span>
				</div>
			</li>
			<li class="flex ">
				<img src="/images/icon_1.jpg" alt="">
				<div class="flex flex-col ml-8">
					<span class="inline-block text-666 text-xl">公开透明</span>
					<span class="inline-block text-999 text-sm">Open and transparent</span>
				</div>
			</li>
			<li class="flex ">
				<img src="/images/icon_1.jpg" alt="">
				<div class="flex flex-col ml-8">
					<span class="inline-block text-666 text-xl">行业正规</span>
					<span class="inline-block text-999 text-sm">Formal industry</span>
				</div>
			</li>
			<li class="flex ">
				<img src="/images/icon_1.jpg" alt="">
				<div class="flex flex-col ml-8">
					<span class="inline-block text-666 text-xl">真实安全</span>
					<span class="inline-block text-999 text-sm">Authentic security</span>
				</div>
			</li>




		</ul>
	</div>
	<div class="w-newCen mx-auto my-4">
		<ul class="flex  items-center justify-between my-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">厦门地区整形美容医院推荐 <span class="text-newBashColor ml-4 ">Hospital</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<ul class="w-full h-5 flex justify-between items-center mt-8 text-xl">
			<li class=" text-bash  text-newBashColor">热门医院</li>
			<li class=" text-bash text-999">厦门隆鼻医院</li>
			<li class=" text-bash text-999">厦门双眼皮医院</li>
			<li class=" text-bash text-999">厦门隆胸医院 </li>
			<li class=" text-bash text-999"> 厦门玻尿酸医院</li>
			<li class=" text-bash text-999">厦门牙齿种植医院</li>
			<li class=" text-bash text-999">厦门牙齿矫正医院</li>
			<li class=" text-bash text-999"> 更多整形医院></li>
		</ul>
		<ul class="w-full flex justify-between flex-wrap mt-16">
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_1.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门隆鼻医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_2.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门双眼皮医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_3.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门隆胸医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_4.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门玻尿酸医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_5.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门种植牙医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_6.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门矫正医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_7.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门激光医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_8.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门补水医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
		</ul>
		<div class="clear"></div>
		<ul class="w-full mt-10 overflow-hidden  justify-between h-8 flex " style="line-height:1.9rem;">
			<li class="border rounded-xl border-newBashColor text-center leding-loose text-newBashColor w-32  ">
				新入驻医院
			</li>
			<div class="flex-1 overflow-hidden">
				<ul id="yy" class=" h-8 flex-1  whitespace-nowrap" style="margin-left:0 ; animation: cssmarquee 30s linear infinite;">
					@foreach($categories as $category)
					@foreach($category['child'] as $partopic)
					<li class=" mx-4 overflow-hidden  inline-block overflow-ellipsis whitespace-nowrap  leding-loose">
						厦门{{$partopic['par_title']}}医院
					</li>
					@endforeach
					@endforeach
				</ul>
			</div>
		</ul>
	</div>
	<div class="w-newCen mx-auto mt-16">
		<ul class="flex  items-center justify-between my-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">厦门地区整形美容医生推荐 <span class="text-newBashColor ml-4 ">Doctor</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<ul class="w-full h-5 flex justify-between items-center mt-8 text-xl">
			<li class=" text-bash  text-newBashColor">热门医生</li>
			<li class=" text-bash text-999">厦门隆鼻医生</li>
			<li class=" text-bash text-999">厦门双眼皮医生</li>
			<li class=" text-bash text-999">厦门隆胸医生 </li>
			<li class=" text-bash text-999"> 厦门玻尿酸医生</li>
			<li class=" text-bash text-999">厦门牙齿种植医生</li>
			<li class=" text-bash text-999">厦门牙齿矫正医生</li>
			<li class=" text-bash text-999"> 更多整形医生></li>
		</ul>
		<ul class="w-full flex justify-between flex-wrap my-16">
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_1.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门隆鼻医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_2.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门双眼皮医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_1.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门隆胸医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_3.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门玻尿酸医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_2.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门种植牙医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_1.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门矫正医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_3.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门激光医生 </span>
			</li>
			<li class="w-300 h-370px border   flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/doctor_3.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor">厦门补水医生 </span>
			</li>

		</ul>
		<ul class="w-full mt-10 overflow-hidden   justify-between  flex  h-8" style="line-height:1.9rem;" id="doctor">
			<li class="border rounded-xl border-newBashColor text-center leding-loose text-newBashColor w-32 float-left">
				热门医生
			</li>

			<div class="flex-1 overflow-hidden">
				<ul id="yy" class=" h-8 flex-1  whitespace-nowrap" style="margin-left:0 ; animation: cssmarquee 30s linear infinite;">
					@foreach($categories as $category)
					@foreach($category['child'] as $partopic)
					<li class=" mx-4 overflow-hidden  inline-block overflow-ellipsis whitespace-nowrap  leding-loose">
						厦门{{$partopic['par_title']}}医生
					</li>
					@endforeach
					@endforeach
				</ul>
			</div>
		</ul>
	</div>
	<div class="w-newCen mx-auto my-16">
		<ul class="flex  items-center justify-between my-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">整形咨询 <span class="text-newBashColor ml-4 ">Consult</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<ul class="w-full mx-auto mt-8 flex justify-between flex-wrap">
			@foreach($questions as $question)
			<li class="w-630 h-239 border rounded-2xl bg-white hover:shadow-xl pt-2.5 px-4 mt-4">
				<div class="h-70 text-sm overflow-hidden leading-70px flex justify-between ">
					<div>
						@php
						$img=rand(1,3);
						@endphp
						<img src="/images/ask_user_{{$img}}.png" alt="" class="w-54 h-54 inline-block rounded-full">
						<span class="text-333 text-base ml-2.5 mr-5 ">{{$question->qaddress}},{{$question->qage}}岁网友</span>
						<span class="text-999 text-base">{{$question->created_at}}</span>
					</div>
					<div class="text-base text-999 overflow-hidden">
						<span class="inline-block w-20"><i style="background: url('/images/small-icon.png');background-position:-63px 0;background-size:200px 200px; filter: brightness(0%) opacity(38%);" class="w-4.5 h-3 inline-block mr-2"></i>{{$question->qcount}}</span>
						<span class="inline-block w-50"><i style="background: url('/images/sprite-two.png');background-position:-133px 0;background-size:200px 100px; filter: brightness(0%) opacity(38%); vertical-align:middle" class="w-5 h-5 inline-block mr-2 "></i>1</span>
					</div>
				</div>
				<div class="py-4 px-5 bg-f9f9f9">
					<a href="{{route('questionShow',[$question->id])}}" class="text-333">
						<h3 class="h-7 mb-4 text-base overflow-ellipsis pl-8 leading-28px" style="background:url('/images/ask_question.png') left 2px no-repeat">
							{{$question->title}}
						</h3>
					</a>
					<div class="text-666 mt-6 mb-1.5 overflow-ellipsis pl-8 overflow-hidden break-words w-full leading-28px max-h-56px" style="-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;background:url('/images/ask_answer.png') left 2px no-repeat;">
						{!!$question->abody!!}
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="w-newCen mx-auto my-16">
		<ul class="flex  items-center justify-between my-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">整形攻略 <span class="text-newBashColor ml-4 ">Strategy</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<div class="w-full flex justify-between my-4">
			<ul class="flex justify-between flex-wrap w-960">
				@foreach($news as $item)
				<li class="w-472 border rounded-2xl hover:shadow-xl  mb-6 bg-white overflow-hidden  pr-2.5">
					<a href="{{route('NewsShow',$item->id)}}" class="flex justify-between">
						<img src="/storage/{{$item->picture}}" class="mr-4  w-150 h-138 " alt="">
						<div class="w-290px overflow-hidden">
							<h3 class="text-xl  overflow-hidden overflow-ellipsis py-2.5 text-333 w-full whitespace-nowrap ">
								{{$item->title}}
							</h3>
							<div class="text-666 text-base h-45px overflow-ellipsis overflow-hidden" style="-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;">
								{!!$item->body!!}
							</div>
							<span class="text-999 inline-block py-2.5 text-sm">
								{{$item->created_at}}
							</span>
						</div>
					</a>
				</li>
				@endforeach
			</ul>
			<ul class="w-300 border overflow-hidden rounded-2xl p-4.5  h-full">
				<li class="w-full border-b border-newBashColor h-8 flex justify-between">
					<h1 class="font-bold text-xl">
						<span class="w-1 h-4 bg-newBashColor inline-block">
						</span>
						整形知识
					</h1>
					<a href="{{route('zsIndex')}}" class="text-sm text-999">更多></a>
				</li>
				@foreach($zsList as $item)
				<li class="pt-4 border-b w-full overflow-hidden pb-2 hover:shadow-xl">
					<a href="{{route('zsShow',$item->id)}}">
						<h1 class="overflow-hidden">
							{{$item->title}}
						</h1>
						<p class=" mt-2 text-999 text-sm overflow-ellipsis overflow-hidden" style="-webkit-line-clamp:3;-webkit-box-orient:vertical;display:-webkit-box;">
							{{$item->body}}
						</p>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="w-newCen mx-auto my-16">
		<ul class="flex  items-center justify-between my-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">整形项目 <span class="text-newBashColor ml-4 ">Project</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<ul class="w-full pt-50 px-8 pb-2.5 border rounded-xl flex jutstify-between flex-wrap ">

			@foreach($categories as $category)
			@if($loop->first)
			@else
			@break($loop->index >= 11)
			<li class="w-1/5 my-4">
				<a href="#" class="h-35 text-bash text-666 mb-5 overflow-hidden block ">
					<img src="/images/index/{{$category['id']}}.png" alt="" class="inline-block">
					<h3 class="ml-7 inline-block text-xl">{{$category['title']}}</h3>
				</a>
				<ul class="flex flex-wrap">
					@foreach($category['child'] as $partopic)
					@break($loop->index >= 10)
					<li class="text-sm  whitespace-nowrap overflow-hidden mb-2.5 text-999 overflow-ellipsis " style="flex-basis:36%">
						<a href="{{route('showTopic',[$partopic['par_id']])}}">
							{{$partopic['par_title']}}
						</a>
					</li>
					@endforeach
				</ul>
			</li>
			@endif
			@endforeach
		</ul>

	</div>
</div>
<style>
	@keyframes cssmarqueeWrapper {
		0% {
			transform: translateX(100%);
		
		}

		100% {
			transform: translateX(0);
		}
	}

	@keyframes cssmarquee {
		0% {
			transform: translateX(0);
		}
		100% {
			transform: translateX(-100%);
		}
	}
</style>
@endsection