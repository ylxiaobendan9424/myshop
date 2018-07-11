<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="/homes/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/homes/style.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/homes/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="/homes/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="/homes/js/jquery.js"></script>
	<script type="text/javascript" src="/homes/js/plugins.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="/homes/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/homes/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="/homes/include/rs-plugin/css/settings.css" media="screen" />

    <!-- Document Title
    ============================================= -->
	<title>爱购网首页</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }
        /*广告*/
            #budong{
                position:fixed;
                left:0px;
                top:90px;
                
            }
            #budong button span{
                display:block;
                float:right;
            }

    </style>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
        ============================================= -->
        <!-- #top-bar end -->

        <!-- Header
        ============================================= -->
        <header id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="/homes/images/logo.png" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="/homes/images/logo@2x.png" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                        @php

							$res = App\Http\Controllers\admin\CategoryController::getsubcate(0);
						@endphp
                        	@foreach($res as $k=>$v)
                            <li class="current"><a href="#"><div>{{$v->catename}}</div><span>Lets Start</span></a>
                                @if($v->sub)
                                <ul>
                                	@foreach($v->sub as $kk=>$vv)
                                    <li><a href="index-corporate.html"><div>{{$vv->catename}}</div></a>
                                        @if($vv->sub)
                                        <ul>
											@foreach($vv->sub as $kkk=>$vvv)
                                            <li><a href="index-corporate.html"><div>{{$vvv->catename}}</div></a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                	@endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                           
                        </ul>

                        <!-- Top Cart
                        ============================================= -->
                        <div id="top-cart">
                            <a href="cart.blade.php" id="top-cart-trigger"><i class="icon-shopping-cart"></i></a>
                           
                        </div><!-- #top-cart end -->

                        <!-- Top Search
                        ============================================= -->
                       <div id="top-search">
                           <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                           <form action="search.html" method="get">
                               <input type="text" name="q" class="form-control" value="" placeholder="请输入搜索内容...">
                           </form>
                       </div>

						

                        <!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->
        <div class="row">
		@section('banner')
       <!-- 轮播图 -->
        <div class="col-md-8" style="margin:0 0 0 105px">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
               
              </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style=" width:850px;height:350px">
                <div class="item active">
                  <img src="/homes/images/shop/banners/1.jpg" width="850px" height="350px"  alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="/homes/images/shop/banners/2.jpg" width="850px" height="350px"  alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="/homes/images/shop/banners/3.jpg" width="850px" height="350px"  alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="/homes/images/shop/banners/4.jpg" width="850px" height="350px"  alt="...">
                  <div class="carousel-caption">
                  </div>
                </div>
            </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        @show
        <!-- 轮播图结束 -->
        <!-- 公告开始 -->
        @section('gonggao')
        <div class="col-md-2 nopadding" style="color:black height:350px">
            <h4>公告</h4>
            <ul id='uls'>
                @foreach($arr as $k => $v)
                <li><a href="{{$v->url}}">{{$v->title}}</a></li>
                <!-- <li><a href="">{{$v->url}}</a></li> -->
                @endforeach
                
            </ul>

            <script>
                setInterval(function(){

                    // $('#uls li').last().hide().slideDown(2000).prependTo('#uls');

                    $('#uls li').first().hide(1000).slideUp(2000,function(){

                        $(this).appendTo('#uls').show(1500);
                    })

                },3000)

            </script>


        </div>
        @show
        <!-- 公告结束 -->


        </div>

        <!-- 广告开始 -->
        <div id="budong"><!--广告-->
        @foreach($guanggao as $k=>$v)
            <img src="{{$v->gimage}}" width="150px" height="400px">
        @endforeach
            
            <button onclick="document.getElementById('budong').style.display='none';"><span>X</span></button>
            </img>
        </div>
        <!-- 广告结束 -->

        <!-- Content
        ============================================= -->
        
         
        
            
       
        <div class="zk-item" style="width:250px float:left;">
            <div class="img-area" style="margin-left:105px; width:200px;">
                   
                <a href="#" target="_blank" title="夏装韩版字母白色短袖t恤女学生百搭宽松半袖体恤原宿风bf上衣服"><img alt="夏装韩版字母白色短袖t恤女学生百搭宽松半袖体恤原宿风bf上衣服" data-original="https://img.alicdn.com/imgextra/i2/2837580873/TB2.6QLpfuSBuNkHFqDXXXfhVXa_!!2837580873.jpg_310x310.jpg" class="lazy" src="/homes/images/shop/small/12.jpg" style="opacity: 1; width:200px; ">
                </a>

                <p class="title-area elli">
                
                <span class="post-free">
                    包邮
                </span>
                
                夏装韩版字母白色短袖t恤女学生百搭宽松半袖体恤原宿风bf上衣服            
                </p>

                <div class="info">
                    <div class="price-area">
                        <span class="price">
                            ¥<em class="number-font" style="font-size: 26px;">11.9</em>
                        </span>
                        <a href="/index/click/index/id/569101424642/coupon_id/3d9265a853714ffa997ae9af0e4fbd33.html" target="_blank" rel="nofollow">
                                                <span class="coupon-amount">加入购物车</span>
                        </a>
                    </div>
               
                
                </div>
            </div>
            
        </div>

        <!-- Footer
        ============================================= -->
        @section('footer')
        <footer id="footer" class="dark">


            <!-- Copyrights
            ============================================= -->
            <!-- <div id="copyrights"> -->

                <div class="container clearfix">
                    <center>
                    <div class="col-md-12 clearfix" style="height:60px">
                        
                        @foreach($aa as $k => $v)
                            <a href="{{$v->url}}">{{$v->name}}</a>&nbsp;|&nbsp;


                        @endforeach
                        
                    </div>
                    </center>

                    

                </div>

            <!-- </div> --><!-- #copyrights end -->

        </footer>
		@show
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <!-- <div id="gotoTop" class="icon-angle-up"></div> -->

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/homes/js/functions.js"></script>

</body>
</html>