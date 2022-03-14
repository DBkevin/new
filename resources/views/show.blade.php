@extends('default')
@section('sidebar')
   <!--main-->
<div class="main-special">
    <div class="main-banner1" style="background:url(/style/images/team_list/20170817035327845.jpg) no-repeat center center;"></div>
    <div class="main-center">
        <div class="main-Route">当前位置：&nbsp;&nbsp;<a href='/news/'>主页</a> > <a href='/zuixinyouhui/'>院内活动</a> > </div>
        <div class="main-article">
            <h2>{{$show->title}}</h2>
            <div class="art-info">
                <a href="javascript:void(0);" class="dw-swt" target="_blank">在线预约｜<a href="javascript:void(0);" class="dw-swt" target="_blank">专家答疑</a>
                </a>
            </div>
           
            <div class="art-body">
            	
			{!! $show->body !!}
            </div>
        </div>
        
    </div>
</div>
@endsection