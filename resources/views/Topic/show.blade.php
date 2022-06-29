@section("title",$topic->title)
@section('headCss')
<link href="/css/topic.css" rel="stylesheet">
@endsection
@extends('layouts.default')
@section('content')
@include('layouts._CategoryAndTopicMenu')

<ul class="h-9 w-full bg-headbg border-b border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-gray-400 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('catgory',[$topic->Category->dirname])}}">{{$topic->Category->title}}</a>><a href="{{route('showTopic',[$topic->id])}}">{{$topic->title}}</a>
	</li>
</ul>
<!--列表-->
<div class="w-cen mx-auto">
	<ul class="topic_concat flex flex-row  divide-x justify-start">
		<li>
			<div class="concat-img">
				<img src="/images/cont1.png" alt="">
			</div>
			<div class="concat-info">
				<span>快速咨询</span>
				<span>1分钟快速解答</span>
			</div>
		</li>
		<li>
			<div class="concat-img">
				<img src="/images/cont2.png" alt="">
			</div>
			<div class="concat-info">
				<span>整形价格查询</span>
				<span>免费查询真实价格</span>
			</div>
		</li>
		<li>
			<div class="concat-img">
				<img src="/images/cont3.png" alt="">
			</div>
			<div class="concat-info">
				<span>真实案例</span>
				<span>真实反馈案例查询</span>
			</div>
		</li>
	</ul>
	<ul class="flex flex-row flex-nowrap justify-between">
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
						<div class="wd50 left">
							<div class=" flex-start"><span class="op-good  master-spirte"></span> 优点：</div>
							<div>
								{!!$topic->Commit->merit??'-'!!}
							</div>
						</div>
						<div class="wd50 right">
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
					<div class="wd400 left" style="margin-right:28px">
						<div class=" font16 color6"><span class="blue-line"></span>{{$topic->title}}的相关文章：</div>
						<ul class=" blue-list blue-lists">
							<!-- <li class=" ellipsis"><a href="/zs/137019.html" target="_blank"><span></span>额头扁平，如何让额头变饱满</a></li>
							<li class=" ellipsis"><a href="/zs/201382.html" target="_blank"><span></span>额头太窄怎么变宽</a></li> -->
						</ul>
					</div>
					<div class="wd400 left">
						<div class=" font16 color6"><span class="blue-line"></span>{{$topic->title}}的相关问答：</div>
						<ul class=" blue-list blue-listss">
							<!-- <li class=" ellipsis"><a href="/question/1878704.html" target="_blank"><span></span>丰额头的好方法</a></li>
							<li class=" ellipsis"><a href="/question/11801.html" target="_blank"><span></span>填充额头是用自身脂肪填充还是玻尿酸好？</a></li> -->
						</ul>
					</div>
				</div>
			</div>
			<div class="re-project  mb30 mt30">
				<div class="title"><span></span>相关项目<span></span></div>
				<div class="re-items">
					<ul class="re-item left">
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
					
					<div class="re-item-right left tab-content">
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
									{{$item->Commit->crowd}}
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
									{{$item->Commit->crowd}}
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
					<li>
						<div class=" ns-img">
							<a href="/news/46378.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2020/08/27/1121086208-o">
							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/news/46378.html" target="_blank">做眼角提升手术效果对比图？</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>2020-08-27</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/news/1536.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2017/04/12/1544047256-o">

							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/news/1536.html" target="_blank">做开外眼角需要多少钱？费用是多少？</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>2019-09-26</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/news/95691.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2018/09/29/1122037878-o">

							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/news/95691.html" target="_blank">外眼角和内眼角区别是什么</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>2020-09-09</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/news/107236.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2018/10/31/1513042593-o">

							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/news/107236.html" target="_blank">开外眼角手术适合哪些人做</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>2020-01-19</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/news/70151.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2018/07/21/1820044320-o">

							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/news/70151.html" target="_blank">开眼角手术后眼角痒正常么</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>2019-12-08</div>
						</div>
					</li>
				</ul>
			</div>
			<div class=" relative-zx mt20">
				<h3><i class="master-spirte rela-qs"></i>相关咨询</h3>
				<ul class="zx-box">
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="/question/39560.html" target="_blank">开眼角价格</a></div>
						<div class=" zx-da">
							<i class="com-project left"></i>
							<div class="left answer">

								<div><a href="/question/39560.html" target="_blank">
										<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;开眼角的手术费用大致是在4000-15000元，作为一个参考的价格区间，这并不是一个准确的数值，还有其他的很多影响因素导致，　</p>
										<p>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1、开眼角的价格与术后的效果有关系，不同的眼部美感需求，都会让开眼角手术在精细程度上不同。</p>
										<p>　　2、求美者对不同医院的选择，价格也就不同。</p>
										<p>　　3、不同的手术方案也会直接影响开眼角手术的价格。</p>
										<p><br></p>
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="/doctor/8033.html" target="_blank"><img src="https://cdn-ssl.meb.com/2019/12/27/1448512136-s"></a></div>
									<span><a href="/doctor/8033.html" target="_blank">傅荣</a></span>
									<span class="undelines">/</span>
									<span>主任医师</span>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="/question/1712780.html" target="_blank">北京哪里开眼角好？</a></div>
						<div class=" zx-da">
							<i class="com-project left"></i>
							<div class="left answer">

								<div><a href="/question/1712780.html" target="_blank">
										<p>北京做开眼角手术的医院有很多，但是我们一定要选择正规的医院，正规的医院不论是从医生或是设备环境上，都能够给求美者提供更好的服务，而且也能够保障手术的安全及效果。</p>
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="/doctor/8639.html" target="_blank"><img src="https://cdn-ssl.meb.com/2019/12/27/1200317956-s"></a></div>
									<span><a href="/doctor/8639.html" target="_blank">刘暾</a></span>
									<span class="undelines">/</span>
									<span>主任医师</span>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="/question/63976.html" target="_blank">开眼角安全吗，开眼角价格是多少钱啊？</a></div>
						<div class=" zx-da">
							<i class="com-project left"></i>
							<div class="left answer">

								<div><a href="/question/63976.html" target="_blank">
										<p>　　开眼角手术是针对眼裂小，有内眦赘皮的眼睛。开眼角手术是将赘生的上眼皮组织，经由精细的美容手术切缝消除，开眼角手术不会留下明显的手术疤痕。</p>
										<p>　　开眼角是非常安全的，但是一定要选择正规的医院和医生进行手术。医生的手术技术参差不齐决定了开眼角的安全与否，<strong>想了解开眼角医生可以点击咨询</strong>。</p>
										<p>　　开眼角价格大概在2000-8000元之间。影响价格的因素如下：</p>
										<p>　　1、开内眼角多少钱与求美者自身情况有关</p>
										<p>　　2、开内眼角多少钱与医院选择有关</p>
										<p>　　3、开内眼角多少钱与医生水平有关</p>
										<p>　　4、开内眼角多少钱与手术方式有关</p>
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="/doctor/8023.html" target="_blank"><img src="https://cdn-ssl.meb.com/doctor/20170921/dbd8ff1a134f4065965cc9b8f76d6f16875-s"></a></div>
									<span><a href="/doctor/8023.html" target="_blank">陈勇军</a></span>
									<span class="undelines">/</span>
									<span>主治医师</span>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="/question/91889.html" target="_blank">开眼角会有副作用吗？大概要多少钱？会不会留疤？</a></div>
						<div class=" zx-da">
							<i class="com-project left"></i>
							<div class="left answer">

								<div><a href="/question/91889.html" target="_blank">
										<p>开眼角手术一改过去开眼角会遗留明显手术瘢痕的缺点，依照每个人的内眦不同皮肤纹路设计，根据皮瓣整形的原理，改变蒙古皱褶的位置，使内侧眼皮的褶缝，形成与双眼皮皱褶一致的方向，让深藏的粉色泪阜完美展现</p>
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="/doctor/2470.html" target="_blank"><img src="https://cdn-ssl.meb.com/2019/12/27/1148579353-s"></a></div>
									<span><a href="/doctor/2470.html" target="_blank">杨丽</a></span>
									<span class="undelines">/</span>
									<span>主任医师</span>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class=" zx-wen ellipsis"><i class="com-project"></i><a href="/question/320087.html" target="_blank">大小眼怎么自我矫正？</a></div>
						<div class=" zx-da">
							<i class="com-project left"></i>
							<div class="left answer">

								<div><a href="/question/320087.html" target="_blank">
										<p style="white-space: normal;">你好，大小眼是因为发育不完全的原因造成的，是没有办法进行自我矫正的，只能去整形美容医院通过手术整形来达到矫正的效果。所以你可以到当地正规的整形美容医院进行一个整形手术。</p>
									</a></div>
								<div class=" doctor-na">
									<div class="doct-img"><a href="/doctor/8002.html" target="_blank"><img src="https://cdn-ssl.meb.com/2019/12/27/1502019753-s"></a></div>
									<span><a href="/doctor/8002.html" target="_blank">万伟东</a></span>
									<span class="undelines">/</span>
									<span>主任医师</span>

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class=" relative-zx mt20">
				<h3><i class="master-spirte rela-zs"></i>相关知识</h3>
				<ul class="ns-box">
					<li>
						<div class=" ns-img">
							<a href="/zs/1158.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2020/08/20/1413347590">
							</a>
						</div>
						<div class=" ns-text">
							<div class=" two-line"><a href="/zs/1158.html" target="_blank">开眼角前后对比图—真实经验分享</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>8/20/20 2:14:58 PM</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/zs/144482.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2018/04/13/1512194203">
							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/zs/144482.html" target="_blank">学生变大眼的快方法</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>10/28/19 10:04:56</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/zs/149022.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2020/09/23/1208438196">
							</a>
						</div>
						<div class=" ns-text">
							<div class=" two-line"><a href="/zs/149022.html" target="_blank">真人实拍开外眼角前后对比图</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>9/23/20 12:08:55</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/zs/160863.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/2018/04/23/2201048812">

							</a>
						</div>
						<div class=" ns-text">

							<div class=" two-line"><a href="/zs/160863.html" target="_blank">开眼角疤痕增生6个月恢复图片</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>4/24/18 10:49:35</div>
						</div>
					</li>
					<li>
						<div class=" ns-img">
							<a href="/zs/78545.html" target="_blank">
								<img src="https://cdn-ssl.meb.com/image/article/50.jpg">

							</a>
						</div>
						<div class=" ns-text">
							<div class=" two-line"><a href="/zs/78545.html" target="_blank">开内眼角多少钱</a></div>
							<div class=" flex-start colorb2"><span class="casedata-icon two-sprite"></span>9/6/19 5:56:09 PM</div>
						</div>
					</li>
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
			console.log('img');
			$(this).find("img").attr("src", url + img);
			$(this).find('.concat-info>span:first-child').addClass('active');
		}, function() {
			let src = $(this).find("img").attr("src");
			let url = src.slice(0, src.lastIndexOf("/"));
			let img = src.slice(src.lastIndexOf("/"), src.length);
			img = img.replace("-1", "");
			console.log('img');
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