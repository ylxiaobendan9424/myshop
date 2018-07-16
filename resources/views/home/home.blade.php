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
                        <div id="top-cart" style="width:50px;">
                            <!-- <a href="/home/cart">个人中心</a> -->
                            <a href="/info/info"><i class="icon-home"></i></a>
                           
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
        @section('banner')
        <section id="slider" class="slider-parallax revslider-wrap ohidden clearfix">

            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>    <!-- SLIDE  -->
                    @foreach($lunbo as $k=>$v)
                    @if(($k+1)%2==1)

                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Latest Collections" style="background-color: #F6F6F6;">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="100"
                    data-y="50"
                    data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><img src="{{$v->url}}" alt="Girl"></div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="570"
                    data-y="75"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333;">Get your Shopping Bags Ready</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="570"
                    data-y="105"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; white-space: normal; line-height: 1.15;">Latest Fashion Collections</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="570"
                    data-y="275"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">We have created a Design that looks Awesome, performs Brilliantly &amp; senses Orientations.</div>

                   
                </li>
                @else
                <!-- SLIDE  -->
                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="10000"  data-saveperformance="off"  data-title="Messenger bags" style="background-color: #E9E8E3;">
                    <!-- LAYERS -->

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="630"
                    data-y="78"
                    data-customin="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><img src="{{$v->url}}" alt="Bag"></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="0"
                    data-y="110"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333;">Buy Stylish Bags at Discounted Prices</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="0"
                    data-y="140"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; white-space: normal; line-height: 1.15;">Messenger Bags</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="0"
                    data-y="240"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Grantees insurmountable challenges invest protect, growth improving quality social entrepreneurship.</div>

                    <div class="tp-caption customin ltl tp-resizeme"
                    data-x="0"
                    data-y="340"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1550"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><a href="#" class="button button-border button-large button-rounded tright nomargin"><span>Start Shopping</span> <i class="icon-angle-right"></i></a></div>
                </li>
                @endif
                @endforeach
            </ul>
            </div>
            </div>

            <script type="text/javascript">

                jQuery(document).ready(function() {

                    jQuery('.tp-banner').show().revolution(
                    {
                        dottedOverlay:"none",
                        delay:16000,
                        startwidth:1140,
                        startheight:500,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:5,

                        navigationType:"none",
                        navigationArrows:"solo",
                        navigationStyle:"preview2",

                        touchenabled:"on",
                        onHoverStop:"on",

                        swipe_velocity: 0.7,
                        swipe_min_touches: 1,
                        swipe_max_touches: 1,
                        drag_block_vertical: false,

                        parallax:"mouse",
                        parallaxBgFreeze:"on",
                        parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                        keyboardNavigation:"off",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:20,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:0,
                        fullWidth:"on",
                        fullScreen:"off",

                        spinner:"spinner4",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",

                        autoHeight:"off",
                        forceFullWidth:"off",



                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0,
                        fullScreenOffsetContainer: ".header"
                    });




                }); //ready

            </script>

            <!-- END REVOLUTION SLIDER -->

        </section>
        @show

        <!-- Content
        ============================================= -->
        @section('content')
        <section id="content">
        <div id="budong"><!--广告-->
        @foreach($guanggao as $k=>$v)
            <img src="{{$v->gimage}}" width="150px" height="400px">
            
            <button onclick="document.getElementById('budong').style.display='none';"><span>X</span></button>
            </img>
        @endforeach
        </div>

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col-md-9 nopadding">
                        @foreach($lb as $k=>$v)
                        <div class="col-md-6 noleftpadding bottommargin-sm">
                            <a href="#"><img src="{{$v->gpic}}" alt="Image"></a>
                        </div>
                        @endforeach
                       

                    </div>
                    <!-- 公告开始 -->
                    @section('gonggao')
                    <div class="col-md-3 nopadding" style="color:black height:350px">
                    
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


                    
                    @show
                    <!-- 公告结束 -->
                    </div>

                    <div class="clear"></div>

                    <div class="tabs topmargin-lg clearfix" id="tab-3">

                        <ul class="tab-nav clearfix">
                            <li><a href="#tabs-9">New Arrivals</a></li>
                            <li><a href="#tabs-10">Best sellers</a></li>
                            <li><a href="#tabs-11">You may like</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tabs-9">

                                <div id="shop" class="clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                            <a href="#"><img src="/homes/images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                            <div class="sale-flash">50% Off*</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                            <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                            <a href="#"><img src="/homes/images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                            <div class="product-price">$39.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                            <div class="product-price">$49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                            <a href="#"><img src="/homes/images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                            <div class="product-price">$19.95</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-content clearfix" id="tabs-10">

                                <div id="shop" class="clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                            <a href="#"><img src="/homes/images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                            <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                            <a href="#"><img src="/homes/images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                            <div class="product-price">$9.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                            <a href="#"><img src="/homes/images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                            <div class="product-price">$129.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                            <a href="#"><img src="/homes/images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                            <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content clearfix" id="tabs-11">

                                <div id="shop" class="clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img src="/homes/images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                            <div class="product-price">$39.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                            <a href="#"><img src="/homes/images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                            <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
                                            <a href="#"><img src="/homes/images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                            <div class="product-price">$13.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="/homes/images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                            <a href="#"><img src="/homes/images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                            <div class="product-price">$11.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="clear bottommargin-sm"></div>

                   

                </div>

                
            </div>

        </section><!-- #content end -->
        @show

        <!-- Footer
        ============================================= -->
        @section('footer')
        <footer id="footer" class="dark">


            <!-- Copyrights
            ============================================= -->
             <div class="container clearfix">
                    <center>
                    <div class="col-md-12 clearfix" style="height:60px">
                        
                        @foreach($aa as $k => $v)
                            <a href="{{$v->url}}">{{$v->name}}</a>&nbsp;|&nbsp;


                        @endforeach
                        
                    </div>
                    </center>

                    

                </div>
            <!-- #copyrights end -->

        </footer>
        @show
        <!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="/homes/js/functions.js"></script>

</body>
</html>