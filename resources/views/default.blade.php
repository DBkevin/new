<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="image/ico" href="/style/images/common/logo1.ico" rel="XMmylike Icon">
	<link rel="stylesheet" type="text/css" href="/style/css/common.css">
	<link rel="stylesheet" type="text/css" href="/style/css/style.css">
	<title>Document</title>
	<!--通用js-->
	<script type="text/javascript" src="/style/js/jQuery.min.js"></script>
	<script type="text/javascript" src="/style/js/dw.effect.min.js"></script>
	<script type="text/javascript" src="/style/js/dw.swt.min.js"></script>
	<script type="text/javascript" src="/style/js/common.js"></script>
	<script type="text/javascript" src="/style/js/SuperSlide.js"></script>
	<script>
		$(function() {
			(function() {
				var oA = $('.scrollbox_h').find('a');
				var oW = oA.width();
				var aW = oA.length * oW;
				var num = 0;
				$('.scrollbox_h').css({
					width: aW + 'px'
				});
				$('.obtn').click(function() {
					num++;
					if (num > 4) num = 0;
					$('.scrollbox_h').stop().animate({
						left: -num * 250
					});
				});
			})();
		})
	</script>
	<script type="text/javascript">
		var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito", "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");
		var browser = navigator.userAgent.toLowerCase();
		var isMobile = false;
		for (var i = 0; i < mobileAgent.length; i++) {
			if (browser.indexOf(mobileAgent[i]) != -1) {
				isMobile = true;
				//alert(mobileAgent[i]);
				location.href = 'http://mm.xmmylike.com/';
				break;
			}
		}
	</script>
	<style>
		.top-nav-wrap {
			width: 100%;
			height: 35px;
			background: #1d0c4c
		}

		.top-nav {
			width: 1200px;
			margin: 0 auto;
			height: 35px;
			background: #1d0c4c;
		}

		/*.top-nav .city{ float:left; line-height:35px; color:#797676}
        .top-nav .city a{ color:#797676; padding:0px 10px;}*/
		.top-nav .city {
			width: 700px;
			float: left;
			line-height: 35px;
			height: 35px;
			color: #fff;
			position: relative
		}

		.top-nav .city a {
			color: #fff;
			display: inline-block;
			width: 50px;
			text-align: center;
			/*font: 12px/1.75 "微软雅黑", "宋体",arial, Verdana;*/
			font-size: 12px;
		}

		.top-nav .city .t1 {
			float: left;
		}

		.top-nav .city .t2 {
			float: left;
			width: 510px;
			height: 35px;
			box-sizing: border-box;
			overflow: hidden;
			position: relative
		}

		.top-nav .city .obtn {
			position: absolute;
			width: 20px;
			height: 20px;
			top: 7px;
			background: url(/style/images/common/jiantou.png);
			cursor: pointer
		}

		.scrollbox {
			position: absolute;
			left: 0;
			top: 0px;
		}

		.scrollbox_h {
			position: absolute;
			left: 0;
			top: 0px;
		}

		.top-nav .guanzhu {
			float: right;
			line-height: 35px;
			color: #c6af59;
			font: 12px/2.4 "微软雅黑", "宋体", arial, Verdana;
			font-size: 12px;
		}

		.top-nav .guanzhu .pl {
			padding-right: 30px;
		}

		.top-nav .guanzhu .tn-tel {
			float: left;
			display: inline;
			padding: 0 15px 0 25px;
			background: url(/style/images/common/tel.png) left center no-repeat;
		}

		.top-nav .guanzhu .tn-title {
			float: left;
		}

		.top-nav .guanzhu .tn-title .tn-ico {
			float: left;
			display: inline-block;
			width: 20px;
			height: 20px;
			margin: 8px 0px 0px 8px;
			background-image: url(/style/images/common/order-c1-ico.png);
			transition: all 0.3s linear 0s;
			-webkit-transition: all .3s linear 0s;
			-moz-transition: all .3s linears 0s
		}

		.top-nav .guanzhu .tn-title a.tn1 {
			background-position: 0 0;
		}

		.top-nav .guanzhu .tn-title a:hover.tn1 {
			background-position: 0 -20px;
		}

		.top-nav .guanzhu .tn-title a.tn2 {
			background-position: 20px 0;
		}

		.top-nav .guanzhu .tn-title a:hover.tn2 {
			background-position: 20px -20px;
		}

		.top-nav .guanzhu .tn-title a.tn3 {
			background-position: 40px 0;
		}

		.top-nav .guanzhu .tn-title a:hover.tn3 {
			background-position: 40px -20px;
		}

		.top-nav .guanzhu .tn-title a.tn4 {
			background-position: 60px 0;
		}

		.top-nav .guanzhu .tn-title a:hover.tn4 {
			background-position: 60px -20px;
		}

		.top-nav .guanzhu .tn-tab {
			float: left;
			display: inline-block;
			padding: 0px 0px 0px 8px;
		}

		.top-nav .guanzhu .sj {
			background: url(/style/images/common/sj.png) 0 center no-repeat;
			padding-left: 15px;
			position: relative;
			color: #c6af59
		}

		.top-nav .guanzhu .sj .wx {
			position: absolute;
			left: -55px;
			top: 25px;
			z-index: 99;
			display: none
		}

		.top-nav .guanzhu a:hover.sj .wx {
			display: block
		}

		/*eagle add*/
		.top-nav .guanzhu .tn-title a.tn2 {
			position: relative;
		}

		.top-nav .guanzhu .tn2 .wx1 {
			position: absolute;
			left: -82px;
			top: 15px;
			z-index: 99;
			display: none
		}

		.top-nav .guanzhu a:hover.tn2 .wx1 {
			display: block
		}

		.top-nav .guanzhu .tn-title a:hover.tn2 .wx1 {
			display: block
		}

		.top-nav .guanzhu .sj {
			background: url(/style/images/common/sj.png) 0 center no-repeat;
			padding-left: 15px;
			position: relative;
			color: #c6af59 !important;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="main-center">
			<!--头部logo-->
			<div class="header-l"><a href="/" target="_blank"></a></div>
			<div class="header-r">
				<!--头部导航-->
				<ul>
					<li><img src="/style/images/common/head-tel.png" alt=""></li>
				</ul>
			</div>
		</div>
	@section('sidebar')
           
     @show
	</div>
		<div class="footbg">
		<div class="clear"></div>
		<div class="footer" style="height: 90px;">
			版权所有 © 厦门美莱整形美容 闽ICP备17025485号|<img src="/newindex/skin2019/home_onepage/images/ghs.png"><span style="height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">厦公网安备35020302001917号</span>|
			<a href="http://www.xmmylike.com/" style="color: #fff;text-decoration: underline;"> 闽ICP备17025485号</a>
			<div style=" color:#818181;   line-height: 1em;">友情链接：
				<a href="http://www.xmmylike.com/" style="color: #AAAAAA;line-height: 1em;">厦门美莱整形医院</a>

			</div>
			<!-- |长沙市雨花区芙蓉中路二段193号 -->
		</div>
		<div class="clear"></div>
	</div>
	<script type="text/javascript">
		$(".dw-swt").on("click", function(text, isMobile) {
			ksChatLink = 'https://kefu7.kuaishang.cn/bs/im.htm?cas=56299___836301&fi=70055&ism=1';
			/**
			 * 若强行打开新窗口,则放开设置,不设置则手机不打开新窗口,pc打开新窗口,此设置只对当前自定义事件有效
			 * 若想全局生效,包括快商通默认的打开聊天窗口事件,则将此变量ksUserDefinedOpenNewChatWin定义在ks.j前即可
			 */
			//var ksUserDefinedOpenNewChatWin=true;

			eval(function(p, a, c, k, e, r) {
				e = function(c) {
					return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
				};
				if (!''.replace(/^/, String)) {
					while (c--) r[e(c)] = k[c] || e(c);
					k = [function(e) {
						return r[e]
					}];
					e = function() {
						return '\\w+'
					};
					c = 1
				};
				while (c--)
					if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
				return p
			}('h Q(a,b){3(!a)9 J;9 z D("(^|&)"+b+"=([^&]*)(&|$)","i").16(a)}h G(a,b){4 c=a.j(\'?\');3(c==-1)9\'\';a=a.14(c+1,a.y);4 d=z D("(^|&)"+b+"=([^&]*)(&|$)","i");4 r=a.K(d);3(r!=L)9 O(r[2]);9\'\'}3(12&&5.j(\'l=1\')==-1){3(5.j(\'?\')==-1){5+=\'?l=1\'}6{5+=\'&l=1\'}}4 7,A=5;4 v=5.11("?");v.17("");3(q P!=\'R\'&&P==w){7=w}6 3(Q(v[1],\'l\')){7=J}6{7=w}h t(){4 a=\'\';u{4 b=G(5,\'X\');3(b){4 c=\'\';4 d=k.V.K(z D(\'(^| )\'+b+\'U\'+b+\'=([^;]*)(;|$)\'));3(d!=L){c=O(d[2])}3(c){a+=\'&Z=\'+c}}}o(e){}4 f="";u{3(N.k.n.y>0){f=N.k.n}}o(e){f=k.n}3(!f||f.y==0){f=k.n}a+=\'&S=\'+C(m.B.x);3(f)a+=\'&T=\'+C(f);3(s)a+=\'&H=\'+C(s);3(5.j(\'?\')==-1){a=\'?\'+a.W(1)}5+=a;3(!7){m.B.x=5}6{4 g=m.Y(5,\'M\');3(g){u{g.10()}o(e){}}6{m.B.x=5}}}3(q 8!=\'R\'){4 p={};3(s)p[\'H\']=s;3(7)p[\'13\']=\'M\';u{3(q 8.F==\'h\'){3(7&&A.j(\'15\')==-1&&!8.E){8.E=A}8.F(p)}6 3(q 8.I==\'h\'){8.I(p)}6{t()}}o(e){t()}}6{t()}', 62, 70, '|||if|var|ksChatLink|else|openNewChatWin|KS|return||||||||function||indexOf|document|ism|window|referrer|catch||typeof||text|ksOpenLink|try|localArr|true|href|length|new|_ksChatLink|location|encodeURIComponent|RegExp|customUrl|openChatWin|getQueryString|sText|openChatLink|false|match|null|_blank|opener|unescape|ksUserDefinedOpenNewChatWin|checkQueryString|undefined|dp|ref|_KS_|cookie|substring|cas|open|vi|focus|split|isMobile|oTarget|substr|kuaishang|test|push'.split('|'), 0, {}))

		})
	</script>
</body>

</html>