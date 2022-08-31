<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<title>@yield('title'){{config('app.name')}}</title>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<meta name="keywords" content="@yield('keywords','厦门美莱医疗美容医院,厦门美莱,厦门整形医院哪家好,厦门整形医院排名,厦门美莱整形医院')">
	<meta name="description" content="@yield('description','厦门美莱医疗美容整形医院,厦门美莱医疗美容医院主要开展眼部整形/鼻部整形/胸部整形/微整形/面部整形等多种特色医疗整形美容项目,汇集众多整形医师,为爱美人士定制美容方案。')">
	<script src="{{mix('js/app.js')}}"></script>
	<meta name="wap-font-scale" content="no">
	<meta name="mobile-agent" content="format=[wml|xhtml|html5]; url=url">
	<script>
		!(function(win, doc) {
			function setFontSize() {
				let docEl = doc.documentElement;
				let winWidth = docEl.clientWidth;
				if (winWidth <= 750) {
					doc.documentElement.style.fontSize = (winWidth / 750) * 100 + 'px';
				} else {
					doc.documentElement.style.fontSize = 100 + 'px';
				}
			}
			let evt = 'onorientationchange' in win ? 'orientationchange' : 'resize';
			win.addEventListener(evt, function() {
				setFontSize();
			}, false);

			win.addEventListener("pageshow", function(e) {
				if (e.persisted) {
					setFontSize();
				}
			}, false);
			setFontSize();
		}(window, document));
	</script>
	@yield('headCss')
	@yield('headJs')
</head>

<body class="font-sans @yield('body-bg','bg-eee') max-w-mobie  mx-auto w-full">
	<div class="mx-auto">
		@include('Mobies.layouts.header')
		@yield('content')
		<!--foot-->
		@include('Mobies.layouts.footer')
	</div>
</body>

</html>