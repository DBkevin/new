@section('headCss')
<link href="/css/category.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
<ul class="w-full navs-menu" style="background-color:#fff;">
	<li class="w-cen mx-auto flex flex-nowrap align-content items-center justify-start category-list">
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
		<a href="/project" target="_blank">
			<span>眼部整形</span>
		</a>
		<a href="/project" target="_blank">
			<span>微整注射</span>
		</a>
		<a href="/project" target="_blank">
			<span>鼻部整形</span>
		</a>
		<a href="/project" target="_blank">
			<span>胸部整形</span>
		</a>
		<a href="/project" target="_blank">
			<span>面部轮廓</span>
		</a>
		<a href="/project" target="_blank">
			<span>脂肪整形</span>
		</a>
		<a href="/project" target="_blank">
			<span>皮肤美容</span>
		</a>
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
		<a href="/project" target="_blank">
			<span>整形项目</span>
		</a>
	</li>
</ul>
<div class="categoryBox bg-headbg w-full h-auto border-solid border-white border-t pt-8 pb-4 ">
	<ul class="categoryCen">
		<li class="cen-list ">
			<div class="w-full border-solid border-b border-gray-200 flex flex-row items-center pb-5 ">
				<span class="cen_title"><a href="#" class="">开眼角</a></span>
				<span class="gray-ls"></span>
				<div class="wach-more" ><a href="#">查看项目</a><span ></span></div>
			</div>
			<ul class="mt-5 flex flex-row items-center">
				<li class="mr-8 mb-4"><a href="#">开外眼角</a></li>
				<li class="mr-8 mb-4"><a href="#">开内眼角</a></li>
			</ul>
		</li>
	</ul>
</div>

@endsection