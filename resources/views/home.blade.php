@section('headCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
@include('layouts._IndexAndDoctorMenu')
<div class="w-full h-649px banner mx-auto  relative">
	<ul class="w-full mx-auto">
		<li style="background:url('/images/ban_1.jpg') center">
		</li>
	</ul>
	<ul class="absolute" >
		@foreach($categories as $category)
		<li class="flex flex-nowrap flex-row">
			<div class="nav_left">
				<i class="h-sprite ">
					<img src="/storage/{{$category['picture']}}" alt="">
				</i>
				<span>{{$category['title']}}</span>
			</div>
			<div class="nav_rigt hidden" >
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
	<div class="w-newCen mx-auto py-16">
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
	<div class="w-newCen mx-auto py-4">
		<ul class="flex  items-center justify-between py-4">
			<li class="w-405px border h-px"></li>
			<li class="text-2xl">厦门地区整形美容医院推荐 <span class="text-newBashColor ml-4 ">Hospital</span></li>
			<li class="w-405px border h-px"></li>
		</ul>
		<ul class="w-full h-5 flex justify-between items-center pt-8 text-xl">
			<li class=" text-bash  text-newBashColor">热门医院</li>
			<li class=" text-bash text-999">厦门隆鼻医院</li>
			<li class=" text-bash text-999">厦门双眼皮医院</li>
			<li class=" text-bash text-999">厦门隆胸医院 </li>
			<li class=" text-bash text-999"> 厦门玻尿酸医院</li>
			<li class=" text-bash text-999">厦门牙齿种植医院</li>
			<li class=" text-bash text-999">厦门牙齿矫正医院</li>
			<li class=" text-bash text-999"> 更多整形医院></li>
		</ul>
		<ul class="w-full flex justify-between flex-wrap pt-16">
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_1.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门隆鼻医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_2.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门双眼皮医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_3.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门隆胸医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_4.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门玻尿酸医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_5.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门种植牙医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_6.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门矫正医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_7.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门激光医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			<li class="w-300 h-370px border relative  flex flex-col items-center my-4 hover:shadow-xl  group  ">
				<img src="/images/item_top.png" class="absolute top-0 right-0  z-1 " alt="">
				<img src="/images/item_8.png" alt="" class="w-192px h-192px mt-38px">
				<span class="mt-6 inline-block text-xl text-666 group-hover:text-newBashColor"  >厦门补水医院 <i style="background:url('/images/V.png')  ; width:24px;height:24px; vertical-align:sub;" class="inline-block  ml-2"></i></span>
				<div class="h-38px w-214px border-2 rounded-3xl border-newBashColor mt-7 text-center leading-loose text-base text-newBashColor group-hover:bg-newBashColor group-hover:text-white">
					申请优惠
				</div>
			</li>
			
			
		</ul>
	</div>
</div>
@endsection