@section('title',$curr->title."_")
@section('keywords',$curr->keywords)
@section('description',$curr->secription)
@extends('Mobies.layouts.default')
@section('content')
<div class="w-full h-auto bg-white mx-auto">
	<ul class="text-333  border-b" style="font-size: .24rem; line-height:1.2;padding:0.2rem;">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('zsIndex')}}">整形知识</a>><a href="{{route('ZsList',$curr->category->dirname)}}">{{$curr->Category->title}}知识</a><span class="text-999">>{{$curr->title}}知识</span>
	</ul>
	<ul class="listCen w-11/12  mx-auto">
		@foreach($zs as $item)
		<li class="flex  justify-between border-b text-999 overflow-hidden">
			<a href="{{route('zsShow',$item->id)}}" class="w-1/4  overflow-hidden">
				<img src="{{$item->picture}}" alt="">
			</a>
			<div class="flex flex-col overflow-hidden w-70% text-666 ">
				<a href="{{route('zsShow',$item->id)}}" class="w-full truncate">{{$item->title}}</a>
				<div class="w-full flex justify-start text-999">
					<span>{{$item->created_at->format('Y-m-d')}}</span>
					<span>{{$item->doctor->name}}</span>
				</div>
			</div>
		</li>
		@endforeach

	</ul>
	<style>
		.listCen>li {
			font-size: .3rem;
			padding: 5% 0;
		}

		.listCen>li>div>a {
			margin-bottom: .2rem;
			line-height: 1.2;
		}

		.listCen>li>div>div>span {
			font-size: calc(0.13 * 30vw);
			line-height: 1.2;

		}

		.listCen>li>div>div>span:first-child {
			margin-right: .1rem;
		}

		.listCen>li>div>div>span::before {
			width: .28rem;
			height: .28rem;
			content: '';
			display: inline-block;
			background: url('/m/images/detial-data.png') no-repeat center;
			background-size: auto;
			vertical-align: middle;
			margin-right: .05rem;
		}

		.listCen>li>div>div>span:last-child::before {
			background: url('/m/images/detial-ly.png') no-repeat center !important;
		}
	</style>
	<div class="w-full h-8 bg-white">
	</div>
</div>
@endsection