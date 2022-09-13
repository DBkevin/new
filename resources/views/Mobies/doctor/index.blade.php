@section('headCss')
<link href="/css/m_doctor.css" rel="stylesheet">
@endsection
@section('title','整形医生排名_整形外科医生_整形美容医生_美莱整形网')
@section("keywords",'整形外科医生,整形医生排名,整形美容医生')
@section("description",'美莱整形医生栏目汇聚了众多优质专业的正规整形医生,同时为求美者提供在线免费咨询整形医生的服务,让求美者能够更了解整形美容业的真实情况,做出更好的选择')
@extends('Mobies.layouts.default')
@section('content')

<div class="w-full max-full banner h-auto overflow-hidden">
	<img src="/m/images/doctor.jpg" alt="" class="w-full">
</div>
<div class="w-full doctorListMenu bg-white">
	<h1 class="border-l-2 border-bashColor ">热门医生推荐</h1>
	<ul class="w-full border-t">
		@foreach($doctors as $item)
		<li class="border-b">
			<a href="{{route('doctorShow',$item->id)}}" class="w-full flex justify-between items-center">
				<div class="rounded-full overflow-hidden ">
					<img src="/storage/{{$item->picture}}" alt="">
				</div>
				<div class="table-cell align-middle text-999">
					<h1 class="truncate">{{$item->name}}</h1>
					<h2 >{{$item->title}} | 执业年限：{{$item->age}}</h2>
					<h3 class="truncate">擅长项目：
						@foreach($item->tags as $tag)
						<span>{{$tag->title}}</span>
						@if($loop->last)
						@else
						、
						@endif
						@endforeach
					</h3>
					<h4 class="truncate">
						个人简介：{{$item->introduce}}
					</h4>
				</div>
			</a>
		</li>
		@endforeach
	</ul>
</div>
<div class="w-full h-8 bg-white">
</div>
@endsection