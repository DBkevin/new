@inject('menus', 'App\Models\Category')
<ul class="w-full navs-menu bg-white pt-5 h-17">
	<li class="w-cen mx-auto flex flex-nowrap align-content items-center justify-start category-list">
		<a href="{{route('index')}}" target="_blank">
			<span>首页</span>
		</a>
		@foreach($menus->all() as $item)
		@if(empty($thisCategory))
		<a href="/project/{{$item->dirname}}" data-url="{{$item->dirname}}" target="_blank">
			@else
			@if($item->title==$thisCategory)
			<a href="/project/{{$item->dirname}}" class="active" data-url="{{$item->dirname}}" target="_blank">
				@else
				<a href="/project/{{$item->dirname}}" data-url="{{$item->dirname}}" target="_blank">
					@endif
					@endif
					<span>{{$item->title}}</span>
				</a>
				@endforeach
	</li>
</ul>
<script>
	$(function() {
		let menus = $('.navs-menu >li >a').not('a:first').hover(function() {
			$(this).addClass('active');
		}, function() {
			$(this).removeClass('active');
		});

	})
</script>