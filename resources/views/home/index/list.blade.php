@extends('layout.homes')

@section('title','列表')
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
                                    <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                    <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
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
                                <p>{{$k->desc}}</p>
                                <ul class="iconlist">
                                    <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                    <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                    <li><i class="icon-caret-right"></i> Delivered in 3-5 Days</li>
                                    <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
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
        @endsection