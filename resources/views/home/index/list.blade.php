@extends('layout.homes')

@section('title','列表')
<style>
    #foot{
        margin-top:0px;
    }
</style>
@section('page')


@endsection
@section('content')
<section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="product-1 clearfix">
                        @foreach($data as $k)
                        <?php 
                            $img = $k->gs;

                         ?>
                        <div class="product clearfix">
                            <div class="product-image">
                             @foreach($img as $v)
                                <a href="/home/details/{{$k->id}}"><img src="{{$v->gpic}}" ></a>
                                <a href="/home/details/{{$k->id}}"><img src="{{$v->gpic}}"></a>
                            @endforeach
                              
                                <div class="product-overlay">
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> 加入购物车</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> 快速查看</span></a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-title"><h3><a href="/home/details">{{$k->gname}}</a></h3></div>
                                <div class="product-price"><del>$24.99</del> <ins>${{$k->price}}</ins></div>
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                </div>
                                <p>划线价格

指商品的专柜价、吊牌价、正品零售价、厂商指导价或该商品的曾经展示过的销售价等，并非原价，仅供参考。

未划线价格

指商品的实时标价，不因表述的差异改变性质。具体成交价格根据商品参加活动，或会员使用优惠券、积分等发生变化，最终以订单结算页价格为准。

商家详情页（含主图）以图片或文字形式标注的一口价、促销价、优惠价等价格可能是在使用优惠券、满减或特定优惠活动和时段等情形下的价格，具体请以结算页面的标价、优惠条件或活动规则为准。

此说明仅当出现价格比较时有效，具体请参见《淘宝价格发布规范》。若商家单独对划线价格进行说明的，以商家的表述为准。</p>
                                <ul class="iconlist">
                                    <li><i class="icon-caret-right"></i> 动态颜色选项</li>
                                    <li><i class="icon-caret-right"></i> 大量尺寸选项</li>
                                    <li><i class="icon-caret-right"></i> 在3-5天内交货</li>
                                    <li><i class="icon-caret-right"></i> 30天退货政策</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach

                    </div><!-- #shop end -->

                </div>

            </div>

        </section><!-- #content end -->
@endsection

@section('footer')



            <!-- Copyrights
            ============================================= -->
             <div class="container clearfix" style="background-color: #333;">
                    <center>
                    <div class="col-md-12 clearfix" style="height:60px">
                        
                        @foreach($aa as $k => $v)
                            <a href="{{$v->url}}">{{$v->name}}</a>&nbsp;|&nbsp;


                        @endforeach
                        
                    </div>
                    </center>

                    

                </div>
            <!-- #copyrights end -->


        @endsection