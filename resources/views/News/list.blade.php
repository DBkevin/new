@section('title','整容咨询_整形美容咨询_整形攻略-')
@extends('layouts.default')
@section('content')
<div class="clear-both"></div>
@include('layouts._IndexAndDoctorMenu')
<div class="clear-both"></div>
<ul class="h-9 w-full bg-headbg  border-t border-headBor border-solid">
	<li class="h-9 w-cen flex flex-row mx-auto items-center text-333 text-sm">
		<a href="/">{{env('APP_NAME')}}</a>> <a href="{{route('NewsIndex')}}">整形攻略</a>><span class="text-999">矫正歪下巴攻略</span>
	</li>
</ul>
<div class="w-cen mx-auto mt-8 flex ">
	<ul class="flex flex-nowrap w-full justify-between">
		<li class="w-tcleft">
			<div class="mr-p30 pt-7.5 pb-7.5 pl-8 pr-8 bg-newsListBG rounded text-999 text-bash overflow-hidden w-full flex flex-wrap items-center justify-start ">
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover active:bg-bashColor active:text-white">
					<a href="#">全部123</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>
				<span class="rounded py-px px-1  align-center inline-block mr-4 mb-4.25 hover:text-666 hover:bg-newsListHover">
					<a href="#">全部</a>
				</span>


			</div>
			<div class="w-full py-2.5 border-t border-b">
				<span class="ml-2 text-sm">
					去眼角细纹全部攻略共 <span class="text-doctor">649</span> 篇
				</span>
			</div>
			<ul class="w-full overflow-hidden">
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="#" class="block w-200 h-150 overflow-hidden">
						<img src="http://cf.test/storage/article/picture_1658890550_tHGxzoPGeh.jpg" alt="" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="#" class="text-333 text-lg w-full block">
							去眼角细纹效果怎么样
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">2020/02/25</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>999次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">眼角细纹是指眼部皮肤受到外界环境影响，形成游离自由基，而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹纹。</p>
					</div>
				</li>
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="#" class="block w-200 h-150 overflow-hidden">
						<img src="http://cf.test/storage/article/picture_1658890550_tHGxzoPGeh.jpg" alt="" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="#" class="text-333 text-lg w-full block">
							去眼角细纹效果怎么样
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">2020/02/25</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>999次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">眼角细纹是指眼部皮肤受到外界环境影响，形成游离自由基，而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹纹。</p>
					</div>
				</li>
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="#" class="block w-200 h-150 overflow-hidden">
						<img src="http://cf.test/storage/article/picture_1658890550_tHGxzoPGeh.jpg" alt="" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="#" class="text-333 text-lg w-full block">
							去眼角细纹效果怎么样
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">2020/02/25</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>999次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">眼角细纹是指眼部皮肤受到外界环境影响，形成游离自由基，而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹纹。</p>
					</div>
				</li>
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="#" class="block w-200 h-150 overflow-hidden">
						<img src="http://cf.test/storage/article/picture_1658890550_tHGxzoPGeh.jpg" alt="" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="#" class="text-333 text-lg w-full block">
							去眼角细纹效果怎么样
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">2020/02/25</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>999次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">眼角细纹是指眼部皮肤受到外界环境影响，形成游离自由基，而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹纹。</p>
					</div>
				</li>
				<li class="border-b pt-5 pb-4 overflow-hidden flex justify-between">
					<a href="#" class="block w-200 h-150 overflow-hidden">
						<img src="http://cf.test/storage/article/picture_1658890550_tHGxzoPGeh.jpg" alt="" class="inline w-full h-full">
					</a>
					<div class="overflow-hidden w-9/12 text-666">
						<a href="#" class="text-333 text-lg w-full block">
							去眼角细纹效果怎么样
						</a>
						<span class="text-999 text-xs pt-3 w-full block">
							<i style="background:url('/images/small-icon.png');background-size:200px 200px;background-position:-48px 0" class="inline-block w-4 h-3.5 mr-1 align-middle"></i>
							<span class="mr-4 inline-block">2020/02/25</span>
							<img src="/images/news-look.png" alt="" class=" inline-block h-3 w-4.5 align-middle mr-1">
							<span>999次阅读</span>
						</span>
						<p class="max-h-15 text-sm truncate whitespace-normal my-3.5 " style="-webkit-line-clamp:2 !important;display: -webkit-box;-webkit-box-orient:vertical">眼角细纹是指眼部皮肤受到外界环境影响，形成游离自由基，而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹而自由基可以破坏正常细胞膜组织内的胶原蛋白、活性物质，氧化细胞而形成小细纹、皱纹纹。</p>
					</div>
				</li>
				
			</ul>
		</li>
		<li class="w-tcright">
			@include('layouts._listzixun')
		</li>
	</ul>
</div>

<div class="clear-both"></div>
@endsection