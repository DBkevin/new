@inject('menus', 'App\Models\Category');


<ul class="w-full navs-menu" style="background-color:#fff;">
	<li class="w-cen mx-auto flex flex-nowrap align-content items-center justify-start category-list">
		<a href="/project/" target="_blank">
			<span>整形项目</span>
		</a>
		@foreach($menus->all() as $item)
		<a href="/project/{{$item->dirname}}" data-url="{{$item->dirname}}"target="_blank">
			<span>{{$item->title}}</span>
		</a>
		@endforeach
	</li>
</ul>
