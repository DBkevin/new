@section('headCss')
<link href="/css/index.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
<div class="w-full h-px"></div>
<div class="w-cen mx-auto mt-10 h-24 pb-2 flex  flex-row flex-nowrap align-content items-center justify-between">
	<img src="/images/logo.png" class="w-72" alt="">
	<ul class="flex flex-wrap flex flex-col justify-end head-middle">
		<li class="flex flex-row flex-nowrap align-content items-center justify-around">
			<input type="text" id="id" placeholder="专业知识、优质医院嗖的一下就出来">
			<div class="search_logo">
				<img src="/images/search.png" alt="">
			</div>
		</li>
		<li class="flex flex-row flex-nowrap align-centetn itmes-center justify-start">
			<a href="javascript:void(0)" class="">大家都在搜：</a>
			<a href="#">
				微整不动刀
			</a>
			<a href="#">
				玻尿酸
			</a>
			<a href="#">
				吸脂
			</a>
		</li>
	</ul>
	<img src="/images/tel.png" alt="">
</div>
<ul class="w-full navs-menu">
	<li class="w-cen mx-auto flex flex-nowrap align-content  items-center  justify-start ">
		<a href="#">首页</a>
		<a href="#">整形项目</a>
		<a href="#">找医生</a>
		<a href="#">整形咨询</a>
		<a href="#">整形知识</a>
		<a href="#">整形攻略</a>
	</li>
</ul>
<div class="w-full banner mx-auto  relative">
	<ul class="w-full mx-auto">
		<li style="background:url('/images/ban_1.jpg') center">
		</li>
	</ul>
	<ul class="absolute">
		<li>
			<div class="nav_left">
					<i class="h-sprite h-one">
					</i>
					<span>眼部</span>
			</div>
			<div class="nav_rigt"></div>
		</li>
	</ul>
</div>
@endsection