<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>个人中心</title>

		<link href="/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/css/systyle.css" rel="stylesheet" type="text/css">

	</head>

	<body>
		<!--头 -->
		<header>
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd">
									<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="/homes/images/logo.png" alt="Canvas Logo"></a>
									
								</div>
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="/home" target="_top"><span>首页</span></a></div>
							</div>
							
							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="/home/cart" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span></a></div>
							</div>
							<div class="topMessage favorite">
								<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
							</div>
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							

							<div class="search-bar pr">
								{{--<a name="index_none_header_sysc" href="#"></a>
								<form style="width:500px;">
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
								</form>--}}
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</article>
		</header>
           
			</div>
			<b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">
					<div class="wrap-left">
						<div class="wrap-list">
							<div class="m-user">
								<!--个人信息 -->
								<div class="m-bg"></div>
								

								<!--个人资产-->
								
							</div>
							@section('content')
							<div class="box-container-bottom"></div>

							<!--订单 -->
							
							<!--九宫格-->
							
							<!--物流 -->
							

							<!--收藏夹 -->
							
							@show
						</div>
					</div>
					
				</div>
				

			</div>

			<aside class="menu">
				<ul>
					<li class="person active">
						<a href="index.html">个人中心</a>
					</li>
					<li class="person">
						<a href="#">个人资料</a>
						<ul>
							<li> <a href="gerenxinxi">个人信息</a></li>
							<li> <a href="shouhuo">收货地址</a></li>
						</ul>
					</li>
					<li class="person">
						<a href="#">我的交易</a>
						<ul>
							<li><a href="wodedingdan">我的订单</a></li>
						</ul>
					</li>
					

					<li class="person">
						<a href="#">我的小窝</a>
						<ul>
							<li> <a href="collection.html">收藏</a></li>
							
							<li> <a href="comment">评价</a></li>
							
						</ul>
					</li>

				</ul>

			</aside>
		</div>
		<!--引导 -->
		
	</body>

</html><SCRIPT Language=VBScript><!--

//--></SCRIPT><SCRIPT Language=VBScript><!--

//--></SCRIPT>