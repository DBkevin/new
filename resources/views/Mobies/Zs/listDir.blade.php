@section('title',$dir->title."_")
@section('keywords',$dir->keywords)
@section('description',$dir->secription)
@extends('Mobies.layouts.default')
@section('content')
<ul class="flex items-center jusity-between bg-white flex-wrap align-center text-666 overflow-hidden category">
	@foreach($category as $item)
	<li class="overflow-hidden w-auto">
		<a href="{{route('ZsList',[$item->dirname])}}">
			{{$item->title}}
		</a>
	</li>
	@endforeach
</ul>
<div class="mx-auto w-full listcen bg-white">
	<h1>{{$dir->title}}最新知识</h1>
	<ul class="text-666 w-full overflow-hidden">
		@foreach($zs as $item)
		<li class="w-full flex text-333  border-b justify-between">
			<a href="{{route('zsShow',[$item->id])}}" class="truncate">{{$item->title}}</a>
			<span class="inline-block">{{$item->created_at->format('Y-m-d')}}</span>
		</li>
		@endforeach
	</ul>
</div>
<style>
	.category {
		font-size: .28rem;
		line-height: 1.2;
		padding: .3rem .3rem 0 .3rem;
	}

	.category>li {
		margin: 0 .3rem .3rem 0;
	}

	.listcen {
		margin: .3rem auto;
		padding: .3rem;
	}

	.listcen>h1 {
		font-size: calc(0.13 * 32vw);
		line-height: 1.5;
	}

	.listcen>h1::before {
		width: 3px;
		background-color: #f6b453;
		height: .4rem;
		margin-right: 4%;
		content: '';
		display: inline-block;
		vertical-align: middle;
	}
	.listcen>ul>li{
		font-size: calc(0.13 * 32vw);
		padding:3% 0;
	}
	.listcen>ul>li>a{
		max-width: 78%;
	}
</style>
@endsection