@section('title','整形知识_整形小常识_')
@section('keywords',"整形知识,整形小知识,整形小常识")
@section('description',"美莱网整形知识大全提供眼部整形、鼻部整形、胸部整形、面部轮廓、瘦身塑形、皮肤美容、牙齿美容等180多个、涉及人体全身的整形小常识，为您了解整形美容提供全面准确的整形知识。")
@extends('Mobies.layouts.default')
@section('content')
<ul class="w-full zsIndex bg-white h-auto overflow-hidden">
	@foreach($category as $item)
	<li class="flex justify-between border-b">
		<a href="{{route('ZsList',[$item->dirname])}}" class="w-1/5">
			<img src="/storage/{{$item->picture}}" class="w-full h-full" alt="">
		</a>
		<div class="w-3/4">
			<a href="{{route('ZsList',[$item->dirname])}}" class="block w-full">
				{{$item->title}}
			</a>
			<span class="w-full block"> {{$item->slogan}}</span>
		</div>
	</li>
	@endforeach
</ul>
<div class="w-full h-8 bg-white">
</div>
<style>
	.zsIndex {
		margin-top: 10px;
		font-size: .3rem;
	}

	.zsIndex>li {
		padding: .2rem;
		color: #b2b2b2;
	}

	.zsIndex>li>div>a {
		color: #4d4d4d;
		margin-bottom: .15rem;
		font-size: .32rem;
	}

	.zxIndex>li>div>span {
		font-size: .32rem;
		line-height: .5rem;
	}
</style>
@endsection