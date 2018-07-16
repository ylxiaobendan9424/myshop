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

    <link type="text/css" rel="stylesheet" href="/homes/info/css/alpha1.css" >
    <link type="text/css" rel="stylesheet" href="/homes/info/css/alpha2.css" >
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
    <title>@yield('title')</title>

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

    </style>


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

    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>


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
                                    <li><a href="/home/list/{{$vv->id}}"><div>{{$vv->catename}}</div></a>
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

        @section('page')
        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>My Account</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
        @show
       
        
        </div>

        @section('content')
            
        @show

        <!-- Footer
        ============================================= -->
        
        @section('footer')
        
           

        @show
        
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <!-- <div id="gotoTop" class="icon-angle-up"></div> -->

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/homes/js/functions.js"></script>
@section('js')

@show

    
</body>
</html>