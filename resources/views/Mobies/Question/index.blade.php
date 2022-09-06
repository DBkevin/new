@section('title',$Parent->title??$dir->title??'整形咨询_整形小常识_整形项目咨询小常识-')
@section("keywords",$Parent->title??$dir->title??'全部项目整形咨询,全部项目整形常识,全部项目整形小常识')
@section("description",$Parent->title??$dir->title??'厦门美莱全部项目整形咨询栏目提供全部项目整形项目的手术方法、注意事项、适合人群、整形效果以及风险介绍等全部项目项目整形小常识，为您做全部项目整形项目提供全面准确的全部项目整形咨询。')
@extends('Mobies.layouts.default')
@section('content')
<div class="w-full h-auto bg-white m-hot mx-auto" style="font-size:calc(0.13 * 32vw); ">
	<ul class="text-999 border-b" style="height:.8rem;padding:0 .3rem;">
		<a href="/" style="line-height: .8rem;">{{env('APP_NAME')}}</a>> <a href="{{route('questionIndex')}}">整形问答</a>>
		<span>{{$Parent->title??$dir->title??'全部'}}问答</span>
	</ul>
	<div class="w-full h-auto bg-white mx-auto flex justify-around" style="font-size: calc(0.13*32vw);padding:.3rem;">
		<select name="category" id="category" class=" text-999 text-center " style="padding:0 .3rem;">
			<option value="all">全部</option>
			@if(isset($dir))
			@foreach($category as $item)
			@if($item->dirname ==$dir->dirname)
			<option value="{{$item->dirname}}" selected>{{$item->title}}</option>
			@else
			<option value="{{$item->dirname}}">{{$item->title}}</option>
			@endif
			@endforeach
			@else
			@foreach($category as $item)
			<option value="{{$item->dirname}}">{{$item->title}}</option>
			@endforeach
			@endif
		</select>
		<select name="parent" id="parents" class="text-999" style="padding:0 .3rem;">
			<option value="all">项目部位</option>
			@if(isset($parents))
			@foreach($parents as $item)
			@if($item->dirname==$Parent->dirname)
			<option value="{{$item->dirname}}" selected>{{$item->title}}</option>
			@else
			<option value="{{$item->dirname}}">{{$item->title}}</option>
			@endif
			@endforeach
			@endif
		</select>
	</div>
</div>
<script>
	$(() => {
		$('#category').change(() => {
			$dirname = $('#category').val();
			GoNew($dirname);
		});
		$("#parents").change(() => {
			GoNew($('#parents').val());
		});

		function GoNew($dirname) {
			$url = "/question";
			if ($dirname == 'all') {
				location.href = $url;
			} else {
				location.href = $url + '/' + $dirname;
			}
		}
	})
</script>
<ul class="w-full h-auto bg-white  questionCen mx-auto overflow-hidden">
	@foreach($zs as $item)
	<li class="w-full overflow-hidden border-b">
		<a href="{{route('questionShow',$item->id)}}" class="text-666 block w-full h-auto ">
			<h1 class="text-333  truncate">{{$item->title}}</h1>
			<p class="text-999">
				<i></i>
				{{$item->abody}}
			</p>
		</a>
	</li>
	@endforeach
</ul>
{{ $zs->links() }}
<style>
	.questionCen {
		letter-spacing: 0.02rem;
		margin-top: .2rem;
		padding: .3rem .4rem;
	}

	.questionCen>li {
		padding: .36rem 0;
	}

	.questionCen>li>a>h1 {
		font-size: calc(0.13 * 40vw);
		line-height: .6rem;
	}

	.questionCen>li>a>h1::before {
		content: '';
		width: .44rem;
		display: inline-block;
		height: .44rem;
		background: url('/m/images/now-wen.png') no-repeat center;
		background-size: 100% 100%;
		margin-right: .2rem;
		vertical-align: text-bottom;
	}

	.questionCen>li>a>p::before {
		content: '';
		width: .44rem;
		height: .44rem;
		display: inline-block;
		background: url('/m/images/now-answer.png') no-repeat top;
		background-size: 100% 100%;
		vertical-align: text-bottom;
		margin-right: .2rem;
	}

	.questionCen>li>a>p {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		-webkit-line-clamp: 3;
		font-size: calc(0.13 * 36vw);
		line-height: .54rem;
		margin-top: .2rem;
	}
</style>
<div class="w-full h-8 bg-white">
</div>
@endsection