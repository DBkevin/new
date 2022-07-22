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
				<li class="pt-6 pb-4 w-full border-b border-question-border border-solid">
					1234324
				</li>
			</ul>
		</li>
	</ul>
</div>

<div class="clear-both"></div>
@endsection