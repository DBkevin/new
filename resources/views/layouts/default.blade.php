<!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-sans">
	<div class="mx-auto min-w-min xl">
		@include('layouts.header')
		@include('layouts.banner')
		@yield('content')
	
		 @include('layouts.like')
		<!--foot-->
		 @include('layouts.foot')
	</div>
</body>

</html>