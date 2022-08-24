@include('layouts._listzixun',['bg'=>$bg??''])
@isset($zss)
<div class="mt-5 w-full mb-5">
	<div class="pb-5 overflow-hidden text-xl text-333">
		<span class="w-1 h-5 5 mr-4 align-middle inline-block bg-inline-block bg-question rounded "></span>相关攻略
	</div>
	<ul class="bg-white pt-1 pl-2.5 pr-3.5 pb-p30" id="question-right-xg">
		@foreach($zss as $item)
		<li class="w-full mt-5 truncate">
			<span class="w-7.5 h-7.5 text-2xl mr-2.5 mt-2.5 inline-block italic align-middle text-999">{{$loop->iteration}}.</span>
			<a href="{{route('zsShow',[$item->id])}}" class="overflow-ellipsis  text-lg whitespace-nowrap align-middle  text-333 align-left w-full hover:text-bashColor ">
				{{$item->title}}
			</a>
		</li>
		@endforeach
	</ul>
</div>
@endisset
@isset($questions)
<div class="mt-5 w-full mb-5">
	<div class="pb-5 overflow-hidden text-xl text-333">
		<span class="w-1 h-5 5 mr-4 align-middle inline-block bg-inline-block bg-question rounded "></span>相关整形知识
	</div>
	<ul class="bg-white pt-1 pl-2.5 pr-3.5 pb-p30" id="question-right-xg">
		@foreach($questions as $item)
		<li class="w-full mt-5 truncate">
			<span class="w-7.5 h-7.5 text-2xl mr-2.5 mt-2.5 inline-block italic align-middle text-999">{{$loop->iteration}}.</span>
			<a href="{{route('questionShow',[$item->id])}}" class="overflow-ellipsis  text-lg whitespace-nowrap align-middle  text-333 align-left w-full hover:text-bashColor ">
				{{$item->title}}
			</a>
		</li>
		@endforeach
	</ul>
</div>
@endisset