@section("title",$topic->seotitle??$topic->title)
@section('headCss')
<link href="/css/topic.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
@include('layouts._CategoryAndTopicMenu',['thisCategory'=>$topic->Category->title])
@section('body-bg','bg-white')
<ul class="h-9 w-full bg-headbg border-b border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('catgory',[$topic->Category->dirname])}}">{{$topic->Category->title}}</a>><a href="{{route('showTopic',[$topic->id])}}">{{$topic->title}}</a>
	</li>
</ul>
<!--列表-->
<div class="w-cen mx-auto">
	@include('layouts._showTop',['width'=>'w-full','wrap'=>'flex-nowrap','height'=>'h-24.5'])
	<ul class="flex flex-row flex-nowrap justify-between pb-10">
		<li class="w-tcleft">
			<div class="topic overflow-hidden relative beauty-pic">
				<img src="/storage/{{$topic->picture}}" alt="">
				<div class="bottom-text">
					<div style="margin-bottom:15px;margin-top:15px;">
						<i></i>
						<h1>{{$topic->title}}</h1>
					</div>
					<p>更新时间：{{$topic->updated_at}}&emsp;&emsp;阅读人数：1851人 </p>
				</div>
			</div>
			<div class="add-ct"></div>
			<ul class="w-tcleft mt-5 overflow-hidden flex flex-row flex-nowrap justify-between ct-bottom">
				<li class="table-left">
					<ul class="common">
						<li class="pj-in pointer ">项目介绍</li>
						<li class="pointer a-but"><span>美学标准</span></li>
						<li class="pointer b-but"><span>价格费用</span></li>
						<li class="pointer c-but"><span>时间周期</span></li>
						<li class="pointer d-but"><span>材料设备</span></li>
					</ul>
					<ul class="common">
						<li class="pj-cm pointer">项目常识</li>
						<li class="pointer e-but"><span>效果</span></li>
						<li class="pointer f-but"><span>优缺点</span></li>
						<li class="pointer g-but"><span>适宜人群</span></li>
						<li class="pointer h-but"><span>风险提示</span></li>
					</ul>
					<ul class="common">
						<li class="pj-act pointer">注意事项</li>
						<li class="pointer i-but"><span>术前准备</span></li>
						<li class="pointer j-but"><span>术后护理</span></li>
						<li class="pointer k-but"><span>副作用及处理</span></li>
					</ul>
				</li>
				<li class="table-right">
					<div class="tab-common">
						<p class="common-title"><i class="pj-indor"></i>{{$topic->title}}项目简介</p>
						<div class="mt-5">
							<p>{{$topic->description}}</p>
						</div>
					</div>
					<div class="tab-common">
						<p class=" common-title"><i class="pj-infor"></i>{{$topic->title}}项目信息</p>
						<div class="mt-5 flex flex-wrap content-between justify-between items-center">
							<div class="detail-opt"><span>手术部位：</span>{{$topic->Info->site}}</div>
							<div class="detail-opt"><span>手术费用：</span>{{$topic->Info->price}}</div>
							<div class="detail-opt ellipsis"><span>治疗方式：</span>{{$topic->Info->methods}}</div>
							<div class="detail-opt"><span>治疗次数：</span>{{$topic->Info->count}}</div>
							<div class="detail-opt"><span>效果维持：</span>{{$topic->Info->keep}}</div>
							<div class="detail-opt">
								<span>麻醉方式：</span>
								{{$topic->Info->narcosis??"-"}}
							</div>
							<div class="detail-opt">
								<span>
									手术材料：
									<i>{{$topic->Info->materials??'-'}}</i>
								</span>
							</div>
							<div class="detail-opt">
								<span>住院时间：</span>
								{{$topic->Info->lengthofstay??'-'}}
							</div>
							<div class="detail-opt"><span>拆线时间：</span>{{$topic->Info->removethetime??'-'}}</div>
						</div>
					</div>
				</li>
			</ul>
			<div class="pj-intro" id="one">
				<div class="introdtion-title">项目介绍</div>
				<div class=" mt30">
					<div class=" yellow-text font18">美学标准</div>
					<div class=" ft156 mt16">
						<i>暂无数据</i>
					</div>
					<div class=" mt30">
						<div class=" yellow-text font18">价格费用</div>
						<div class=" ft156 mt16">参考价格：{{$topic->Introtdtion->price??'='}}</div>
					</div>

					<div class=" mt30">
						<div class=" yellow-text font18">时间周期</div>
						<div class=" ft156 mt16"><span class="color9">手术时长：</span>{{$topic->Introtdtion->operationtime??'-'}}</div>
						<div class=" ft156 mt16"><span class="color9">消肿时长：</span>{{$topic->Introtdtion->swellingtime??'-'}}</div>
						<div class=" ft156 mt16"><span class="color9">恢复时长：</span>{{$topic->Introtdtion->removetime??'-'}}</div>
					</div>
					<div class=" mt30">
						<div class=" yellow-text font18">材料设备</div>
						<div class=" ft156 mt16">
							<div class=" ft156">{{$topic->Introtdtion->material??'-'}}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="pj-intro" id="two">
				<div class="introdtion-title">项目常识</div>
				<div class=" mt30">
					<div class=" yellow-text font18">手术效果</div>
					<div class=" ft156 mt16">
						{{$topic->Commit->effect??'-'}}
					</div>
				</div>
				<div class=" mt30">
					<div class=" yellow-text font18">优缺点</div>
					<div>
						<div class="wd50 float-left">
							<div class=" flex-start"><span class="op-good  master-spirte"></span> 优点：</div>
							<div>
								{!!$topic->Commit->merit??'-'!!}
							</div>
						</div>
						<div class="wd50 float-right">
							<div class=" flex-start"><span class="op-bad  master-spirte"></span> 缺点：</div>
							<div>
								{!!$topic->Commit->defect??'-'!!}
							</div>
						</div>
					</div>
				</div>
				<div class="clear-both"></div>
				<div class=" mt30">
					<div class=" yellow-text font18">适宜人群</div>
					<div class=" ft156 mt16">
						<p>{!!$topic->Commit->crowd??'-'!!}</p>
					</div>
				</div>
				<div class=" mt30">
					<div class=" yellow-text font18">风险提示</div>
					<div class=" ft156 mt16">{{$topic->Commit->risk??'-'}}</div>
				</div>
			</div>
			<div class="pj-intro" id="three">
				<div class="introdtion-title">注意事项</div>
				<div class=" mt30">
					<div class=" yellow-text font18">术前准备</div>
					<div class=" ft156 mt16 tenheight">
						{!!$topic->Notice->plan??'-'!!}
					</div>
				</div>
				<div class=" mt30">
					<div class=" yellow-text font18">术后护理</div>
					<div class=" ft156 mt16 telheight"><i>{{$topic->Notice->nurse??'-'}}</i></div>
				</div>
				<div class=" mt30">
					<div class=" yellow-text font18">副作用及处理</div>
					<div class=" ft156 mt16">
						{!!$topic->Notice->sideeffects??'-'!!}
					</div>
				</div>
				<div class=" mt30">
					<div class="wd400 float-left" style="margin-right:28px">
						<div class=" font16 color6"><span class="blue-line"></span>{{$topic->title}}的相关文章：</div>
						<ul class=" blue-list blue-lists">
							@foreach($zs as $item)
							@if($loop->index>=2)
							@break
							@endif
							<li class="ellipsis">
								<a href="{{route('zsShow',[$item->id])}}" target="_blank">
									<span></span>
									{{$item->title}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="wd400 float-left">
						<div class=" font16 color6"><span class="blue-line"></span>{{$topic->title}}的相关问答：</div>
						<ul class=" blue-list blue-listss">
							@foreach($question as $item)
							@if($loop->index>=2)
							@break
							@endif
							<li class="ellipsis">
								<a href="{{route('questionShow',[$item->id])}}" target="_blank">
									<span></span>
									{{$item->title}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@if(!empty($child[0]))
			<div class="re-project  mb30 mt30">
				<div class="title"><span></span>相关项目<span></span></div>
				<div class="re-items">
					<ul class="re-item float-left">
						@foreach($child as $item)
						@if($loop->first)
						<li class="pointer active">
							<a class="no-choose" data-toggle="tab" href="#{{$loop->index}}" aria-expanded="true">{{$item->title}}</a>
						</li>
						@else
						<li class="pointer">
							<a class="no-choose" data-toggle="tab" href="#{{$loop->index}}" aria-expanded="false">{{$item->title}}</a>
						</li>
						@endif
						@endforeach
					</ul>
					<div class="re-item-right float-left tab-content">
						@foreach($child as $item)
						@if($loop->first)
						<div class="re-lists tab-pane fade active in" id="{{$loop->index}}">
							<!--二级项目展示-->
							<!--项目简介-->
							<div>
								<div class="ftitle">项目简介</div>
								<div class="ft156 mt20">
									<p>{{$item->description}}</p>
								</div>
							</div>
							<!--适用人群-->
							<div class=" mt35">
								<div class="ftitle">适用人群</div>
								<div class="ft156 mt20">
									{!!$item->Commit->crowd!!}
								</div>
							</div>
							<div>
								<div class="learn-more">了解更多</div>
							</div>
						</div>
						@else
						<div class="re-lists tab-pane fade in" id="{{$loop->index}}">
							<!--二级项目展示-->
							<!--项目简介-->
							<div>
								<div class="ftitle">项目简介</div>
								<div class="ft156 mt20">
									<p>{{$item->description}}</p>
								</div>
							</div>
							<!--适用人群-->
							<div class=" mt35">
								<div class="ftitle">适用人群</div>
								<div class="ft156 mt20">
									{!!$item->Commit->crowd!!}
								</div>
							</div>
							<div>
								<div class="learn-more">了解更多</div>
							</div>
						</div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
			@endif

		</li>
		<li class="w-tcright">
			<div class="relative-zx">
				<h3><i class="master-spirte rela-pj"></i>相关项目</h3>
				<ul class="pj-box">
					@foreach($child as $item)
					<li><a href="{{route('showTopic',[$item->id])}}" target="_blank">{{$item->title}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class=" relative-zx mt20">
				<h3><i class="master-spirte rela-ns"></i>相关攻略</h3>
				<ul class="ns-box">
					@foreach($news as $item)
					<li>
						<div class="ns-img">
							<a href="{{route('NewsShow',[$item->id])}}" target="_blank" class="overflow-hidden w-79px h-59px inline-block">
								<img src="/storage/{{$item->picture}}">
							</a>
						</div>
						<div class="ns-text">
							<div class=" two-line"> <a href="{{route('NewsShow',[$item->id])}}" target="_blank">{{$item->title}}</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>{{$item->created_at->format('Y.m.d')}}</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class=" relative-zx mt20">
				<h3><i class="master-spirte rela-qs"></i>相关咨询</h3>
				<ul class="zx-box">
					@foreach($question as $item)
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="{{route('questionShow',[$item->id])}}" target="_blank">{{$item->title}}</a></div>
						<div class=" zx-da">
							<i class="com-project float-left"></i>
							<div class="left answer">
								<div><a href="{{route('questionShow',[$item->id])}}" target="_blank">
										{!! $item->abody!!}
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="{{route('doctorShow',[$item->Doctor->id])}}" target="_blank"><img src="/storage/{{$item->Doctor->picture}}"></a></div>
									<span><a href="{{route('doctorShow',[$item->Doctor->id])}}" target="_blank">{{$item->Doctor->name}}</a></span>
									<span class="undelines">/</span>
									<span>{{$item->Doctor->title}}</span>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class=" relative-zx mt20">
				<h3><i class="master-spirte rela-zs"></i>相关知识</h3>
				<ul class="ns-box">
					@foreach($zs as $item)
					<li>
						<div class="ns-img">
							<a href="{{route('zsShow',[$item->id])}}" target="_blank" class="overflow-hidden w-79px h-59px inline-block">
								<img src="/storage/{{$item->picture}}" alt="">
							</a>
						</div>
						<div class=" ns-text">
							<div class=" two-line"><a href="{{route('zsShow',[$item->id])}}" target="_blank">{{$item->title}}</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>{{$item->created_at->format('d/m/y H:m:s')}}</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</li>
	</ul>
	<script>
		$(".topic_concat>li").hover(function() {
			let src = $(this).find("img").attr("src");
			let url = src.slice(0, src.lastIndexOf("/"));
			let img = src.slice(src.lastIndexOf("/"), src.length);
			img = img.replace(".", "-1.");
			$(this).find("img").attr("src", url + img);
			$(this).find('.concat-info>span:first-child').addClass('active');
		}, function() {
			let src = $(this).find("img").attr("src");
			let url = src.slice(0, src.lastIndexOf("/"));
			let img = src.slice(src.lastIndexOf("/"), src.length);
			img = img.replace("-1", "");
			$(this).find("img").attr("src", url + img);
			$(this).find('.concat-info>span:first-child').removeClass('active');
		});
		let oneHeigth = $(".beauty-pic").height();
		let twoHeigth = $(".add-ct").height();
		let threeHeigth = $(".ct-bottom").height();
		let fourHeigth = $("#one").height();
		let fiveHeigth = $("#two").height();
		let sevenHeight = 0;
		let sixHeight = $(".wd400").height();
		let tenheight = $(".tenheight").height();
		let telheight = $(".telheight").height();
		$(".a-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + 400
			}, 400);
		})
		$(".b-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + 550
			}, 400);
		})
		$(".c-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + sixHeight + sevenHeight + 800
			}, 400);
		})
		$(".d-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + sixHeight + sevenHeight + 1000
			}, 400);
		})
		$(".e-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + 500
			}, 400);
		})
		$(".f-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + 600
			}, 400);
		})
		$(".g-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + 750
			}, 400);
		})
		$(".h-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + 850
			}, 400);
		})
		$(".i-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + fiveHeigth + 500
			}, 400);
		})
		$(".j-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + fiveHeigth + tenheight + 600
			}, 400);
		})
		$(".k-but").click(function() {
			$('html,body').animate({
				scrollTop: oneHeigth + twoHeigth + threeHeigth + fourHeigth + fiveHeigth + telheight + tenheight + 700
			}, 400);
		})
		$(function() {
			$(".re-item-right").width(890 - $(".re-item").width() - 15 - 3);
			$('.re-item li:eq(0) a').tab('show');
			$('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
				if ($(".re-item li").length * 66 < $(".tab-content .active ")[0].offsetHeight) {
					$(".re-item").height($(".tab-content .active ")[0].offsetHeight);
				} else {
					$(".tab-content .active").height($(".re-item li").length * 66 - 30);
				}
				// 获取已激活的标签页的名称
				var activeTab = $(e.target).text();
				// 获取前一个激活的标签页的名称
				var previousTab = $(e.relatedTarget).text();
				$(".active-tab span").html(activeTab);
				$(".previous-tab span").html(previousTab);
			});
			let txt = "";
			$(".re-item a").each(function(i) {
				$(this).hover(function() {
					if (!$('.re-item li:eq(' + i + ')').hasClass("active")) {
						$(".tab-content .active").removeClass("in").removeClass("active");
					}
					$('.re-item li:eq(' + i + ') a').tab('show');
				}, function() {
					txt = $(this).context.hash;
					$(".re-lists").each(function(j) {
						var num = parseInt(txt.substring(1));
						$(".tab-content:eq(" + num + ")").removeClass("in").removeClass("active");
					});

				});
			});
		});
	</script>
</div>
@endsection