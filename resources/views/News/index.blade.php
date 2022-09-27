@section('title','整形攻略_整形美容咨询_整形问答-')
@section("keywords",'整形攻略')
@section("description",'美莱整形攻略栏目，为整形美容爱好者提供各种整形项目的整形信息、整容整形行业信息，让您从医生医院等多种角度了解更多的整形行业的动态。')
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
@section('body-bg','bg-while')
<div class="clear-both"></div>
<ul class="w-cen mx-auto flex justify-between flex-nowrap block py-5 h-587px overflow-hidden">
	<li class="w-220px h-auto bg-FF8080">
		<ul class="w-full h-auto  text-white relative">
			@foreach($category as $item)
			<li class="w-full h-45px border-t border-FF8080 hover:bg-bashColor  justify-center items-center flex  " id="newNav">
				<a href="#" class="block text-xl flex justify-center items-center  ">
					<i class="w-5 h-6 inline-block mr-5.5" style="background: url(/storage/{{$item->picture}}) no-repeat center; background-size: cover;"></i>
					{{$item->title}}
				</a>
				<div class="hidden w-415px h-566px  bg-white z-20 absolute top-0 left-220px none overflow-hidden" id="newsCen">
					<ul class="block w-full h-full pt-5 pl-5  flex flex-wrap justify-left content-start px-1 py-1 text-666">
						@foreach($item->topics as $topic)
						<li class="text-sm py-2  mx-2 leading-27px border-b hover:text-bashColor hover:border-bashColor">
							<a href="{{route('NewsList',[$topic->dirname])}}" target="_black">
								{{$topic->title}}
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</li>
			@endforeach
		</ul>
	</li>
	<li class="w-660px  h-full">
		<img src="/images/zixun_banner.png" alt="" class="w-full block h-288">
		<ul class="w-full flex flex-wrap justify-wetween">
			@foreach($newsTop as $item)
			<li class="pl-2 mt-4 mb-2 w-1/2 hover:text-bashColor border-l hover:border-bashColor text-sm">
				<a href="{{route('NewsShow',[$item->id])}}" class="truncate text-xs block">{{$item->title}}</a>
				<div class="text-999 pt-2">
					<span class="inline-block mr-4 align-middle">
						<i class="w-4 h-3.5 mr-2.5 inline-block align-middle" style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0;"></i>
						{{$item->created_at->format('d/m/Y')}}</span>
					<span class="inline-block mr-4 align-middle">
						<i class="w-4 h-3.5 mr-2.5 inline-block align-middle" style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-63px 0"></i>
						{{$item->count}}</span>
				</div>
			</li>
			@endforeach
		</ul>

	</li>
	<li class="w-tcright h-full">
		<img src="/images/newsInfo.png" alt="">
	</li>
</ul>
<ul class="w-cen mx-auto flex justify-between flex-wrap block bg-white">
	@foreach($list as $item)
	<li class="mt-50 w-579 h-380 px-4 border ml-0.5 hover:shadow-bash">
		<div class="flex h-19 items-center justify-between w-full text-5ea3f0">
			<div class="flex justify-between items-ceter">
				<span class="w-9 h-36px block bg-gray-200 rounded-full">
					<img src="/storage/{{$item['picture']}}" alt="" class="w-9 h-36px block">
				</span>
				<span class="ml-4 text-2xl">{{$item['title']}}</span>
			</div>
			<div class="text-666 text-sm mx-2 ">
				@foreach($item['topics'] as $chilidItem)
				<a href="{{route('NewsList',[$chilidItem['dirname']])}}" target="_blank" class="pm-2 my-2 hover:text-bashColor ">
					{{$chilidItem['title']}}
				</a>
				@break($loop->index>=2)
				@endforeach
				<a href="{{route('NewsList',[$item['dirname']])}}" target="_blank" class="pm-2 my-2 text-999 hover:text-bashColor">更多>></a>
			</div>
		</div>
		@foreach($item['news'] as $new)
		<div class="bg-faf7e3 flex justify-between items-center mb-2.5 px-2.5 py-2.5 overflow-hidden">
			<a href="{{route('NewsShow',[$new['id']])}}" class="w-141px h-91px block overflow-hidden">
				<img src="/storage/{{$new['picture']}}" alt="" class="w-full h-full overflow-hidden">
			</a>
			<div class="w-350px h-91px overflow-hidden text-base">
				<a href="{{route('NewsShow',[$new['id']])}}" class="truncate block hover:text-bashColor">{{$new['title']}}</a>
				<p class="w-full h-38px text-sm my-1.5 truncate whitespace-normal" style="display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;">
					{{$new['description']}}
				</p>
				<div class="w-full  text-xs overflow-hidden text-999">
					<span class="inline-block mr-4">
						<i style="background: url('/images/small-icon.png');background-position:-63px 0;background-size:200px 200px;" class="w-4.5 h-3 inline-block mr-2"></i>
						{{$new['created_at']}}
					</span>
					<span class="inline-block">
						<i style="background: url('/images/small-icon.png');background-position:-165px 0;background-size:200px 200px;" class="w-3.5 h-3.5 inline-block mr-2 align-middle"></i>
						{{$new['count']}}
					</span>
				</div>
			</div>
		</div>
			@break($loop->index<=1)
		@endforeach
		<ul class="justify-between  pl-4 list-disc list-outside bg-rose-200">
			@foreach($item['news'] as $new)
			@continue($loop->index==0)
			<li class="mt-3  flex justify-between leading-5 truncate text-666 hover:text-bashColor ">
				<a  href="{{route('NewsShow',[$new['id']])}}" class="truncate inline-block"> <span class="w-2 h-2 bg-ccc mr-2 rounded-full align-middle inline-block"></span> {{$new['title']}}</a>
				<span class="inline-block text-ccc text-xs1">{{$new['created_at']}}</span>
			</li>
			@endforeach
		</ul>
	</li>
	@endforeach
</ul>
<div class="clear-both"></div>
<div class="w-cen mx-auto flex justify-between mt-15 bg-white mb-7.5">
	<ul class="w-630px ">
		<li class="text-xll text-999 leading-58px border-b overflow-hidden">
			<div class="border-b-4 border-bashColor mr-9 h-autl w-91px text-333">
				<span>医美知识</span>
			</div>
		</li>
		<ul class=" w-630px flex justify-between flex-wrap">
			@foreach($zs as $item)
			<li class="w-290px h-17 mt-9 overflow-hidden flex justify-between">
				<a href="{{route('zsShow',[$item->id])}}" class="block w-24.5 h-17 overflow-hidden ">
					<img src="/storage/{{$item->picture}}" alt="" class="w-full h-full" class="inline-block">
				</a>
				<div class="ml-4 flex text-999 jutify-center overflow-hidden text-sm w-176px flex-wrap ">
					<a href="{{route('zsShow',[$item->id])}}" class="text-sm max-h-11 leading-6 text-333 truncate mt-2.5 hover:text-bashColor h-4.5">
						{{$item->title}}
					</a>
					<div class="w-full text-999 mt-2 text-xs flex ">
						<span class="inline-block mr-2">
							<i style="background: url('/images/small-icon.png');background-position:-48px 0;background-size:200px 200px;vertical-align:sub" class="w-3.5 h-3.5 inline-block mr-2 "></i>
							{{$item->created_at->format('Y/m/d')}}
						</span>
						<span class="inline-block ">
							<i style="background: url('/images/small-icon.png');background-position:-81px  0;background-size:200px 200px; vertical-align:sub" class="w-3.5 h-3.5 inline-block mr-2 "></i>
							{{$item->Doctor->name}}
						</span>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
	</ul>
	<ul class="w-471px">
		<li class="text-xll text-999 leading-58px border-b overflow-hidden">
			<div class="border-b-4 border-bashColor mr-9 h-autl w-91px text-333">
				<span>医美咨询</span>
			</div>
		</li>
		<ul>
			@foreach($question as $item)
			<li class="h-5.5 mt-5 mb-3 flex justify-between">
				<a href="{{route('questionShow',[$item->id])}}" class="text-333 hover:text-bashColor">
					<span class="inline-block px-1.5 mr-2.5 text-xs  leading-22px text-white bg-ec6909 rounded-sm" style="vertical-align:super">{{$loop->iteration}}</span>
					<span class=" inline-block truncate w-80">
						{{$item->title}}
					</span>
				</a>
				<span class="inline-block text-999 text-xs">
					<i style="background: url('/images/small-icon.png');background-position:-48px 0;background-size:200px 200px; vertical-align:sub" class="w-3.5 h-3.5 inline-block mr-2 "></i>
					{{$item->created_at->format('y/m/d')}}
				</span>
			</li>
			@endforeach
		</ul>
	</ul>
</div>
<div class="clear-both"></div>
@endsection