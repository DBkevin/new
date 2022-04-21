<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield('title'){{config('app.name')}}</title>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<meta name="keywords" content="@yield('keywords','厦门美莱医疗美容医院,厦门美莱,厦门整形医院哪家好,厦门整形医院排名,厦门美莱整形医院')">
	<meta name="description" content="@yield('description','厦门美莱医疗美容整形医院,厦门美莱医疗美容医院主要开展眼部整形/鼻部整形/胸部整形/微整形/面部整形等多种特色医疗整形美容项目,汇集众多整形医师,为爱美人士定制美容方案。')">
</head>

<body class="font-sans max-w-screen-sm mx-auto">
	<div class="mx-auto container">
		@include('mobiles.header')
		@include('mobiles.banner')
		@yield('content')
		<!-- 
		@include('layouts.like')
		@include('layouts.foot')  -->
	</div>
</body>

</html>