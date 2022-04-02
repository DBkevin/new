<div class="w-full bg-black">
	<div class="w-1240 text-white h-24 py-3 mx-auto">
		<p class="text-xl">友情链接</p>
		@foreach($Links as $link)
		<a href="{{$link->url}}" class="text-sm "><span class="text-gray-500">{{$link->name}}</span></a>
		@endforeach
	</div>
</div>