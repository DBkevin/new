@section('title','医生')
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
				<a href="{{route('ZsList',[$item->dirname])}}" class="block text-xl flex justify-center items-center  ">
					@if(isset($item->topics))
					<i class="w-5 h-6 inline-block mr-5.5" style="background: url(/storage/{{$item->picture}}) no-repeat center; background-size: cover;"></i>
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
				<li class="w-80 h-input flex justify-between flex-col  ">
					<div class=" w-full h-52 overflow-hidden relative ">
						<a href="#">
							<img src="http://cf.test/storage/article/438a1a88c9991b34950579f093d619fd62d52bcec0ef7.png" alt="" class="w-full h-full">
							<div class="w-full h-7 text-sm align-middle leading-7 text-white bg-black bg-opacity-70 absolute bottom-0 text-center">[<span class="text-dt">隆鼻</span>]12314</div>
						</a>
					</div>
					<div class=" w-full h-52 overflow-hidden relative ">
						<a href="#">
							<img src="http://cf.test/storage/article/438a1a88c9991b34950579f093d619fd62d52bcec0ef7.png" alt="" class="w-full h-full">
							<div class="w-full h-7 text-sm align-middle leading-7 text-white bg-black bg-opacity-70 absolute bottom-0 text-center">[<span class="text-dt">隆鼻</span>]12314</div>
						</a>
					</div>
				</li>
				<li class="w-6/10 h-input">
					<div class="w-full pb-4 border-b overflow-hidden flex boverflow justify-between">
						<a href="#" class="w-32 h-27-5 overflow-hidden">
							<img src="http://cf.test/storage/article/438a1a88c9991b34950579f093d619fd62d52bcec0ef7.png" alt="" class="w-full h-20">
						</a>
						<div class="h-27-5 w-390">
							<a href="#">
								<h1 class="text-bash">割完双眼皮有哪些注意事向</h1>
							</a>
							<p class="mt-1 mb-2 overflow-ellipsis overflow w-full overflow-hidden max-h-10 text-sm text-666" style="display:-webkit-box;-webkit-line-clamp: 2;-webkit-box-orient:vertical;">
								割完双眼皮术后一般需要注意保持伤口清洁，防止感染，术后的伤口清洁是很重要的；.不可随便服用止痛药；.注意加强眼部a1231231
							</p>
							<div class="text-xs1 text-999">
								<span class="inline-block mr-4"><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-63px 0;"></i>12312312次阅读</span>
								<span class="inline-block mr-4 text-dt "><i class="w-4 h-4 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-111px 0;"></i>张少军</span>
								<span class="inline-block mr-4"><i class="w-4.5 h-3.5 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-93px  0;"></i>双眼皮</span>
							</div>
						</div>
					</div>
					<div class="w-full pb-4 border-b overflow-hidden flex boverflow justify-between">
						<a href="#" class="w-32 h-27-5 overflow-hidden">
							<img src="http://cf.test/storage/article/438a1a88c9991b34950579f093d619fd62d52bcec0ef7.png" alt="" class="w-full h-20">
						</a>
						<div class="h-27-5 w-390">
							<a href="#">
								<h1 class="text-bash">割完双眼皮有哪些注意事向</h1>
							</a>
							<p class="mt-1 mb-2 overflow-ellipsis overflow w-full overflow-hidden max-h-10 text-sm text-666" style="display:-webkit-box;-webkit-line-clamp: 2;-webkit-box-orient:vertical;">
								割完双眼皮术后一般需要注意保持伤口清洁，防止感染，术后的伤口清洁是很重要的；.不可随便服用止痛药；.注意加强眼部a1231231
							</p>
							<div class="text-xs1 text-999">
								<span class="inline-block mr-4"><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-63px 0;"></i>12312312次阅读</span>
								<span class="inline-block mr-4 text-dt "><i class="w-4 h-4 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-111px 0;"></i>张少军</span>
								<span class="inline-block mr-4"><i class="w-4.5 h-3.5 mr-2 inline-block align-middle" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-93px  0;"></i>双眼皮</span>
							</div>
						</div>
					</div>
					<ul calss="w-full overflow-hidden">
						<li class="mt-3 flex justify-between text-666 text-sm">
							<div>
								[
								<a href="#" class="text-dt ">牙呲美白</a>
								]
								<a href="#" class="ml-2.5 hover:text-bashColor">牙齿没白要注意什么</a>
							</div>
							<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>123123次阅读</div>
						</li>
						<li class="mt-3 flex justify-between text-666 text-sm">
							<div>
								[
								<a href="#" class="text-dt ">牙呲美白</a>
								]
								<a href="#" class="ml-2.5 hover:text-bashColor">牙齿没白要注意什么</a>
							</div>
							<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>123123次阅读</div>
						</li>
						<li class="mt-3 flex justify-between text-666 text-sm">
							<div>
								[
								<a href="#" class="text-dt ">牙呲美白</a>
								]
								<a href="#" class="ml-2.5 hover:text-bashColor">牙齿没白要注意什么</a>
							</div>
							<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>123123次阅读</div>
						</li>
						<li class="mt-3 flex justify-between text-666 text-sm">
							<div>
								[
								<a href="#" class="text-dt ">牙呲美白</a>
								]
								<a href="#" class="ml-2.5 hover:text-bashColor">牙齿没白要注意什么</a>
							</div>
							<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>123123次阅读</div>
						</li>
						<li class="mt-3 flex justify-between text-666 text-sm">
							<div>
								[
								<a href="#" class="text-dt ">牙呲美白</a>
								]
								<a href="#" class="ml-2.5 hover:text-bashColor">牙齿没白要注意什么</a>
							</div>
							<div><i class="w-4.5 h-3 mr-2 inline-block align-baseline" style="background-image:url('/images/small-icon.png') ;background-size:200px,200px;background-position:-181px 0;"></i>123123次阅读</div>
						</li>
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