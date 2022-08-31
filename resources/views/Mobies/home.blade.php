@section('headCss')
<link href="/m/css/swiper.min.css" rel="stylesheet">
@endsection
@section('headJs')
<script src="/m/js/swiper.jquery.min.js"></script>
@endsection
@extends('Mobies.layouts.default')
@section('content')
@include('Mobies.layouts.banner')
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
	<div class="flex justify-between  items-center " style="margin-top:.3rem;padding:0 .3rem">
		<div class="flex justify-between flex-col items-center font-semibold" style="font-size:calc(0.13 * 34vw); color:#0faa79;">
			医生团队
			<span class="text-999 " style="margin-top:.18rem;font-size:calc(0.13 * 22vw);">多名优质医生</span>
		</div>
		<a href="{{route('doctorIndex')}}" style="color:#b2b2b2;font-size: calc(0.13 * 24vw);">更多医生&nbsp;&nbsp;></a>
	</div>
	<div class="doctor-cen swiper-container-doctor" style="margin-top:.2rem">
		<ul class="w-full  swiper-wrapper" style="margin-bottom: .4rem;">
			<li class="swiper-slide bg-white flex  flex-col align-center" style="border-radius:.3rem;padding-bottom:.4rem; box-shadow:0 1px 30px 0 rgb(232 232 232 / 50%), 0 1px 28px 0 rgb(232 232 232 / 20%);width:40%;height:100%;">
				<a href="#">
					<div class="overflow-hidden rounded-full " style="width: 1.28rem; height: 1.28rem; margin:.4rem auto 0;">
						<img src="https://cdn-ssl.meb.com/doctor/2022030815295942da1f8e-0594-4d90-8a9f-8743ee6d01a6-s" alt="">
					</div>
					<div class="w-full text-333 overflow-hidden text-center" style="height:.35rem;padding:0 .2rem;font-size:calc(0.13 * 30vw);margin-top:.3rem;">
						张少军
					</div>
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="clear"></div>
<script>
	let swiperDoctor = new Swiper('.swiper-container-doctor', {
		slidesPerView: 2,
		centeredSlides: false,
		paginationClickable: true,
		spaceBetween: 15,
		loop: true,
		width: 414 - 30,
		autoplay: 5000, //可选选项，自动滑动
	});
</script>
<!--items-->
<div class="w-full bg-white overflow-hidden " style="margin-top:.2rem">
	<div class="flex justify-between  items-center " style="margin-top:.3rem;padding:0 .3rem">
		<div class="flex justify-self-start flex-col items-start font-semibold" style="font-size:calc(0.13 * 34vw); color:#F75243;">
			整形必读
			<span class="text-999 " style="margin-top:.18rem;font-size:11px;">不可错过的变美小贴士</span>
		</div>
	</div>
	<div class="w-full text-center overflow-hidden tabs" style="line-height: .45rem; margin-top:.4rem;font-size: 16px;">
		<ul class="swiper-wrapper tab">
			<li class="swiper-slide text-999 text-cneter part active">
				<span>攻略</span>
				<i></i>
			</li>
			<li class="swiper-slide text-999 text-cneter part">
				<span>知识</span>
				<i></i>
			</li>
			<li class="swiper-slide text-999 text-cneter part">
				<span>问答</span>
				<i></i>
			</li>
		</ul>
	</div>
	<div class="w-full text-center overflow-hidden items-content" style="margin-top:.25rem">
		<ul class="swiper-wrapper">
			<li class="swiper-slide" style="margin-right:15px; padding:0 .3rem;">
				<ul class="w-full h-auto cms_news">
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								自体脂肪去眼角细纹有副作用吗？
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-ssl.meb.com/image/2018/01/08/1218398468" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								自体脂肪去眼角细纹有副作用吗？
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-ssl.meb.com/image/2018/01/08/1218398468" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								自体脂肪去眼角细纹有副作用吗？
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-ssl.meb.com/image/2018/01/08/1218398468" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								自体脂肪去眼角细纹有副作用吗？
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-ssl.meb.com/image/2018/01/08/1218398468" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								自体脂肪去眼角细纹有副作用吗？
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-ssl.meb.com/image/2018/01/08/1218398468" alt="">
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="swiper-slide">
				<ul class="w-full h-auto cms_zs">
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-gw.meb.com/cms/image/2022/08/25/1607467058.png" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-gw.meb.com/cms/image/2022/08/25/1607467058.png" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-gw.meb.com/cms/image/2022/08/25/1607467058.png" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-gw.meb.com/cms/image/2022/08/25/1607467058.png" alt="">
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class="flex justify-between items-start">
							<div class="truncate" style=" width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden" style="width: 2rem; height: 1.28rem;border-radius: 8px;">
								<img src="https://cdn-gw.meb.com/cms/image/2022/08/25/1607467058.png" alt="">
							</div>
						</a>
					</li>
				</ul>
			</li>
			<li class="swiper-slide">
				<ul class="w-full h-auto cms_news " style="padding: 0 .25rem">
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class=" text-left">
							<div class="truncate " style="width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden " style="margin-top:.25rem;color:#b2b2b2; font-size:12px;">
								<span style="font-size:14px; color:#ff8686">1</span> 条回答
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class=" text-left">
							<div class="truncate " style="width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden " style="margin-top:.25rem;color:#b2b2b2; font-size:12px;">
								<span style="font-size:14px; color:#ff8686">1</span> 条回答
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class=" text-left">
							<div class="truncate " style="width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden " style="margin-top:.25rem;color:#b2b2b2; font-size:12px;">
								<span style="font-size:14px; color:#ff8686">1</span> 条回答
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class=" text-left">
							<div class="truncate " style="width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden " style="margin-top:.25rem;color:#b2b2b2; font-size:12px;">
								<span style="font-size:14px; color:#ff8686">1</span> 条回答
							</div>
						</a>
					</li>
					<li class="border-b" style="padding:0.25rem 0">
						<a href="#" class=" text-left">
							<div class="truncate " style="width: 4.5rem; font-size: 15px; color: #4d4d4d;">
								隆鼻后鼻子是歪的怎么办
							</div>
							<div class="overflow-hidden " style="margin-top:.25rem;color:#b2b2b2; font-size:12px;">
								<span style="font-size:14px; color:#ff8686">1</span> 条回答
							</div>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<style>
	.tabs .active span {
		color: #333;
		font-weight: 600;
	}

	.tabs .active i {
		display: block;
		width: .4rem;
		height: .07rem;
		border-radius: .07rem;
		background: #F75243;
		margin: 0 auto;
		margin-top: .15rem;
	}
</style>
<script>
	var swiperTabs = new Swiper('.tabs', {
		spaceBetween: 20,
		slidesPerView: 5,
		centeredSlides: false,
		initialSlide: 0
	});
	var swiperTabs = new Swiper('.tabs', {
		spaceBetween: 20,
		slidesPerView: 5,
		centeredSlides: false,
		initialSlide: 0
	});
	var swiperTest = new Swiper('.items-content', {
		slidesPerView: 1,
		spaceBetween: 15,

		centeredSlides: true,
		initialSlide: 0,
		autoHeight: true,
		onSlideChangeEnd: function(swiper) {
			var j = swiper.activeIndex;
			$('.tab .part').removeClass('active').eq(j).addClass('active');
			swiperTabs.slideTo(j, 1000, false);
		}
	});
	setTimeout(function() {
		swiperTest.slideTo(0);
	}, 500);
	$('.tab .part').on('click', function(e) {
		e.preventDefault();
		var i = $(this).index();
		$('.tab .part').removeClass('active').eq(i).addClass('active');
		swiperTest.slideTo(i, 1000, false);
	});
</script>
<div class="w-full h-8 bg-white">
</div>
@endsection