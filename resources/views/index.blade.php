@extends('layouts.default')

@section('content')
<div class="section1 mx-auto xl">
	<div class="lg:text-center my-12">
		<h2 class="mt-2 text-3xl leading-8  tracking-tight text-gray-900 sm:text-4xl">美学艺术 匠心造物</h2>
		<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">时尚挑剔的眼光，用心打造每一件艺术珍品</p>
	</div>
	<ul class="lg:text-center my-12 flex w-1240 mx-auto flex-row flex-nowrap items-center justify-between">
		<li class="relative">
			<img src="{{asset('img/art_img1.jpg')}}" alt="">
			<div class="absolute top-1 mx-auto  w-full">
				<h2 class="mt-6 text-4xl leading-10  tracking-tight text-white w-auto h-auto">
					口碑品牌
				</h2>
				<h4 class="mt-2 text-3xl leading-10  tracking-tight text-white ">
					brand
				</h4>
				<p class="mt-16 text-white leading-8 mx-auto text-xl">
					有温度、有态度、有实力的</br>
					24年大品牌</br>
					全国连锁更放心选择</br>
				</p>
			</div>
		</li>
		<li class="relative">
			<img src="{{asset('img/art_img2.jpg')}}" alt="">
			<div class="absolute top-1 mx-auto  w-full">
				<h2 class="mt-6 text-4xl leading-10  tracking-tight text-white w-auto h-auto">
					口碑品牌
				</h2>
				<h4 class="mt-2 text-3xl leading-10  tracking-tight text-white ">
					brand
				</h4>
				<p class="mt-16 text-white leading-8 mx-auto text-xl">
					有温度、有态度、有实力的</br>
					24年大品牌</br>
					全国连锁更放心选择</br>
				</p>
			</div>
		</li>
		<li class="relative">
			<img src="{{asset('img/art_img3.jpg')}}" alt="">
			<div class="absolute top-1 mx-auto  w-full">
				<h2 class="mt-6 text-4xl leading-10  tracking-tight text-white w-auto h-auto">
					口碑品牌
				</h2>
				<h4 class="mt-2 text-3xl leading-10  tracking-tight text-white ">
					brand
				</h4>
				<p class="mt-16 text-white leading-8 mx-auto text-xl">
					有温度、有态度、有实力的</br>
					24年大品牌</br>
					全国连锁更放心选择</br>
				</p>
			</div>
		</li>
	</ul>
</div>
<div class="mx-auto xl">
	<div class="lg:text-center my-12">
		<h2 class="m-12 text-4xl leading-8  tracking-tight text-gray-900 ">美莱项目</h2>
	</div>
	<div class="my-12 text-center flex flex-row flex-nowrap  w-1240 mx-auto  py-1">
		@foreach($Categories as $item)
		<div class="h-items w-2/12 py-1">
			<div  class="itemTitle w-full block  bg-baseGray h-20 py-4 text-black hover:bg-baseColor hover:text-white text-xl leading-loose cursor-pointer ">{{$item->title}}</div>
		</div>
		<div class="h-items w-10/12 text-white  flex flex-row flex-wrap item-center justify-between">
		@foreach($item->topics as $topic)
			<div class="itemCentent">
				<a href="{{$topic->slug}}" class="relative block w-1/3 h-1/2 p-1 overflow-hidden">
					<img src="/storage/{{$topic->pic}}" alt="">
					<p class="absolute w-full h-1/4 bottom-0 lift-0 bg-opacity-30 bg-black  flex justify-center content-center items-center">
						{{$topic->title}}
					</p>
				</a>
			</div>
		@endforeach
		</div>
		@endforeach
	</div>
</div>
@endsection