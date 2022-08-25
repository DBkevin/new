@extends('Mobies.layouts.default')
@section('content')
<div class="w-full bg-white overflow-hideen" style="padding:0 .3rem .5rem .3rem">
	<ul class="flex flex-wrap items-center w-full" style="font-size: calc(0.13 * 22vw);">
		<li style="width: 1.09rem;
        text-align: center;
        margin-right: .36rem;
		">
			<a href="#" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/mfzx.png" alt="">
				<p class="text-666">
					免费咨询
				</p>
			</a>
		</li>
		<li style="width: 1.09rem;
        text-align: center;
        margin-right: .36rem;
		">
			<a href="{{route('questionIndex')}}" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/zxwd.png" alt="">
				<p class="text-666">
					整形问答
				</p>
			</a>
		</li>
		<li style="width: 1.09rem;
        text-align: center;
        margin-right: .36rem;
		">
			<a href="{{route('NewsIndex')}}" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/zxgl.png" alt="">
				<p class="text-666">
					整形攻略
				</p>
			</a>
		</li>
		<li style="width: 1.09rem;
        text-align: center;
        margin-right: .36rem;
		">
			<a href="{{route('zsIndex')}}" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/vip.png" alt="">
				<p class="text-666">
					整形知识
				</p>
			</a>
		</li>
		<li style="width: 1.09rem;
        text-align: center;
        margin-right:0;
		">
			<a href="{{route('categoryIndex')}}" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/xmbk.png" alt="">
				<p class="text-666">
					项目百科
				</p>
			</a>
		</li>
		<li style="width: 1.09rem;
        text-align: center;
        margin-right: .36rem;
		">
			<a href="{{route('doctorIndex')}}" class="w-full h-full block flex flex-col items-center">
				<img src="/m/images/zmys.png" alt="">
				<p class="text-666">
					整形医生
				</p>
			</a>
		</li>
	</ul>
</div>
<!--ad-->
<div class="flex justify-between items-center w-full bg-f5f5f5" style="padding: .14rem 0 .14rem .14rem">
	<div class="" style=" width: 2.92rem;
        height: 2.92rem;">
		<img src="/m/images/ban3.png" alt="">
	</div>
	<div class="" style=" width: 4.1rem;
        margin-right: .2rem;">
		<img src="/m/images/ban1.png" style="margin-bottom: .2rem;" alt="">
		<img src="/m/images/ban2.png" alt="">
	</div>
</div>
<!--dotoro-->
<div class="w-full bg-white overflow-hidden ">
	<div class="flex justify-between  items-center" style="margin-top:.3rem;padding:0 .3rem">
		<div class="flex justify-between flex-col items-center font-semibold" style="font-size:calc(0.13 * 34vw); color:#0faa79;">
			医生团队
			<span class="text-999 " style="margin-top:.18rem;font-size:calc(0.13 * 22vw);">多名优质医生</span>
		</div>
		<a href="{{route('doctorIndex')}}" style="color:#b2b2b2;font-size: calc(0.13 * 24vw);">更多医生&nbsp;&nbsp;></a>
	</div>
	<div class="doctor-cen" style="margin-top:.2rem">
		<ul class="">
		
		</ul>
	</div>
</div>

@endsection