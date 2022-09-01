@if(isset($curr))
@section('title',$curr->title."_")
@section('keywords',$curr->title."知识,".$curr->title."小知识,".$curr->title."小常识")
@php
$describeCount=count($category);
$describeText="";
foreach($category as $item){
$describeText.=$item->title .",";
}
@endphp
@section('description',"美莱网".$curr->title."项目为您提供".$describeText ."登".$describeCount."个".$curr->title."的整形小常识，为您了解整形美容提供全面准确的整形知识。")
@else
@section('title','整形知识_整形小常识_')
@section('keywords',"整形知识,整形小知识,整形小常识")
@section('description',"美莱网整形知识大全提供眼部整形、鼻部整形、胸部整形、面部轮廓、瘦身塑形、皮肤美容、牙齿美容等180多个、涉及人体全身的整形小常识，为您了解整形美容提供全面准确的整形知识。")
@endif
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="w-cen mx-auto flex justify-between flex-nowrap block py-5 h-587px overflow-hidden">
	<li class="w-220px h-auto bg-FF8080">
		<ul class="w-full h-auto  text-white relative">
			@foreach($category as $item)
			<li class="w-full h-45px border-t border-FF8080 hover:bg-bashColor  justify-center items-center flex  " id="newNav">
				<a href="{{route('ZsList',[$item->dirname])}}" class="block text-xl flex justify-center items-center">
					@if(isset($item->topics))
					<i class="w-5 h-6 inline-block mr-5.5" style="background: url(/storage/{{$item->picture}}) no-repeat center; background-size: cover; filter:grayscale(100%) brightness(200%);"></i>
					@endif
					{{$item->title}}
				</a>
				@if(isset($item->topics))
				<div class="hidden w-415px h-566px  bg-white z-20 absolute top-0 left-220px none overflow-hidden" id="newsCen">
					<ul class="block w-full h-full pt-5 pl-5  flex flex-wrap justify-left content-start px-1 py-1 text-666">
						@foreach($item->topics as $topic)
						<li class="text-sm py-2  mx-2 leading-27px border-b hover:text-bashColor hover:border-bashColor">
							<a href="{{route('ZsList',[$topic->dirname])}}" target="_black">
								{{$topic->title}}
							</a>
						</li>
						@endforeach
					</ul>
				</div>
				@endif
			</li>
			@endforeach
		</ul>
	</li>
	<li class="w-660px  h-full">
		<img src="/images/zixun_banner.png" alt="" class="w-full block h-288">
		<ul class="w-full flex flex-wrap justify-wetween">
			<!--目前为空-->
		</ul>
	</li>
	<li class="w-tcright h-full">
		<img src="/images/newsInfo.png" alt="">
	</li>
</ul>
<div class="w-full bg-white mx-auto">
	<div class="w-cen mx-auto mt-8 pt-8 flex ">
		<ul class="flex flex-nowrap w-full justify-between">
			<li class="w-tcleft">
				<h1 class="pb-3 border-b text-xl">
					<span class="inline-block mr-2 w-8 h-7 align-bottom" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-37px,-89px"></span>
					{{$curr->title??"优质美容整形"}}知识推荐
				</h1>
				<ul class="flex flex-nowrap w-full justify-between mt-4">
					<li class="w-80 h-input flex justify-between flex-col ">
						@foreach($zs as $item)
						@break($loop->index >= 2)
						<div class=" w-full h-52 overflow-hidden relative ">
							<a href="{{route('zsShow',[$item->id])}}">
								<img src="{{$item->picture}}" alt="" class="w-full h-full">
								<div class="w-full h-7 text-sm align-middle leading-7 text-white bg-black bg-opacity-70 absolute bottom-0 text-center">[<span class="text-dt">{{$item->topic->title}}</span>]{{$item->title}}</div>
							</a>
						</div>
						@endforeach

					</li>
					<li class="w-6/10 h-input">
						@foreach($zs as $item)
						@break($loop->index >= 2)
						<div class="w-full pb-4 border-b overflow-hidden flex boverflow justify-between">
							<a href="{{route('zsShow',[$item->id])}}" class="w-32 h-27-5 overflow-hidden">
								<img src="{{$item->picture}}" alt="" class="w-full h-20">
							</a>
							<div class="h-27-5 w-390">
								<a href="{{route('zsShow',[$item->id])}}">
									<h1 class="text-bash">{{$item->title}}</h1>
								</a>
								<p class="mt-1 mb-2 overflow-ellipsis overflow w-full overflow-hidden max-h-10 text-sm text-666" style="display:-webkit-box;-webkit-line-clamp: 2;-webkit-box-orient:vertical;">
									{{$item->introduce}}
								</p>
								<div class="text-xs1 text-999">
									<span class="inline-block mr-4"><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-63px 0;"></i>{{$item->count}}次阅读</span>
									<span class="inline-block mr-4 text-dt "><i class="w-4 h-4 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-111px 0;"></i>{{$item->doctor->name}}</span>
									<span class="inline-block mr-4"><i class="w-4.5 h-3.5 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-93px  0;"></i>{{$item->topic->title}}</span>
								</div>
							</div>
						</div>
						@endforeach
						<ul calss="w-full overflow-hidden">
							@foreach($zs as $item)
							@break($loop->index >= 5)
							<li class="mt-3 flex justify-between text-666 text-sm">
								<div>
									[
									<a href="{{route('ZsList',[$item->topic->dirname])}}" class="text-dt ">{{$item->topic->title}}</a>
									]
									<a href="{{route('zsShow',[$item->id])}}" class="ml-2.5 hover:text-bashColor">{{$item->title}}</a>
								</div>
								<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>{{$item->count}}次阅读</div>
							</li>
							@endforeach
						</ul>
					</li>
				</ul>
			</li>
			<li class="w-tcright border h-50">
				<div class="text-333 w-full pt-4 pb-4 border-b text-xl overflow-hidden">
					<i class="w-7.5 h-7.5 mr-3 ml-3 inline-block align-text-bottom " style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-53px -20px;"></i>
					最新整形美容专题
				</div>
				<ul class="pl-3.5 pr-3.5 zslist">
					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>
					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>

					<li class="mt-5 overflow-hidden w-full leading-4">
						<span class="w-4 h-4   rounded-sm bg-999 text-center italic  text-white inline-block">1</span>
						<a href="#" class="w-zslist ml-3 text-sm text-666 leading-4 overflow-hidden  align-middle inline-block  overflow-ellipsis whitespace-nowrap hover:text-bashColor">牙呲而美白要注意什么1231231</a>
						<span class="align-middle   inline-block text-xs text-999">2022/7/9</span>
					</li>


				</ul>

			</li>
		</ul>
	</div>
</div>
<div class="clear-both"></div>
@endsection