@section('title','整容咨询_整形美容咨询_整形问答-')
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<div class="w-full h-doctor-ban mx-auto  relative">
	<ul class="w-full mx-auto">
		<li class="h-doctor-ban" style="background:url('/images/ban_1.jpg') center no-repeat;background-size: cover;">
		</li>
	</ul>
</div>
<div class="w-cen mx-auto mt-8 flex ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft">
			<h1 class="pb-3 border-b text-2xl">
				<span class="inline-block mr-2 w-8 h-7 align-bottom" style="background-image:url('/images/question-master.png') ;background-size:200px,200px;background-position:-140px -35px"></span>
				优质咨询推荐
				<i class="text-white text-sm inline-block w-8 h-5 aligen-center absolute bg-question-top rounded-lg">精选</i>
			</h1>
			<ul>
				@foreach($zs as $item)
				<li class="pt-6 pb-4 w-full border-b border-question-border border-solid">
					<div class="text-lg text-333 w-full truncate">
						<span style="background: url('/images/question-master.png'); background-position:-102px -34px;" class="inline-block w-7 h-7 mr-4   align-middle"></span>
						<a href="{{route('questionShow',[$item->id])}}">
							{{$item->title}}
						</a>
					</div>
					<div class="text-bash text-999 mt-6 flex justify-between">
						<span class="w-1/10 text-question-inde text-sm block ">
							最佳回复
						</span>
						<p class="w-9/10 overflow-ellipsis overflow-hidden h-auto" style="line-height: 24px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">
							{{$item->abody}}
						</p>
					</div>
					<div class="text-sm mt-6 text-999 flex justify-between">
						<span class="inline-flex ">
							<i style="background-image:url('images/question-master.png');background-size:200px 200px;background-position:-56px -35px" class="inlike-block w-4 h-4 mr-2.5 align-sub"></i>
							<span>本答案由专业 &nbsp;</span>
							<a class="text-question-inde" href="{{route('doctorShow',[$item->Doctor->id])}}">{{$item->Doctor->name}}</a>
							<span>&nbsp;提供</span>
							<span class=" ml-3">发布于{{$item->created_at}}</span>
						</span>
						<span class="inline-flex">
							<i style="background-image:url('images/question-master.png');background-size:200px 200px;background-position:-28px -35px" class="inlike-block w-4.5 h-4.5 mr-2 align-sub"></i>
							0
						</span>
					</div>
				</li>
				@endforeach
			</ul>
		</li>
		<li class="w-tcright">
			@include('layouts._listzixun')
		</li>
	</ul>
</div>

<div class="clear-both"></div>
@endsection