@extends('default')
@section('sidebar')
<!--main-->
<div class="main-special">
	<div class="main-banner1" style="background:url(/style/images/team_list/20170817035327845.jpg) no-repeat center center;">
		<a href="javascript:void(0);" class="dw-swt" target="_blank"></a>
	</div>
	<div class="main-center">
		<div class="main-Route">当前位置：&nbsp;&nbsp;<a href='/'>主页</a> > <a href='/news/'>美莱咨询</a> > </div>
		<div class="article_list">
			@foreach ($news as $new)
			<dl>
				<dt><a href="/news/{{$new->id}}" target="_blank">{{$new->title}}</a></dt>
				<dd>
					<p>{!!$new->body!!}</p>
					<div class="l"><i class="i1">129</i><i class="i2">129</i></div>
					<div class="r"><a href="/zuixinyouhui/344.html" target="_blank">查看详细</a><a href="javascript:void(0);" class="dw-swt" target="_blank">点击咨询</a></div>
				</dd>
			</dl>
			@endforeach

			<!-- <div class="article_list-fy">
					<ul>
						<li>首页</li>
						<li class="thisclass">1</li>
						<li><a href='list_50_2.html'>2</a></li>
						<li><a href='list_50_2.html'>下一页</a></li>
						<li><a href='list_50_2.html'>末页</a></li>

					</ul>
				</div> -->
		</div>
	</div>
</div>
@endsection