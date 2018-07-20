@extends('layout.homes')

@section('title','详情')
@section('page')


@endsection
@section('content')

   <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="single-product">
                    @foreach($data as $k)
                        <div class="product">

                            <div class="col_two_fifth">

                                <!-- Product Single - Gallery
                                ============================================= -->
                                <div class="product-image">
                                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap" data-lightbox="gallery">
                                                <div class="slide" data-thumb="{{$k->gs[0]->gpic}}">
                                                   <a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item">
                                                      <img src="{{$k->gs[0]->gpic}}" alt="Pink Printed Dress">
                                                   </a>
                                                </div>
                                                <div class="slide" data-thumb="{{$k->gs[0]->gpic}}"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{$k->gs[0]->gpic}}" alt="Pink Printed Dress"></a></div>
                                                <div class="slide" data-thumb="{{$k->gs[0]->gpic}}"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{$k->gs[0]->gpic}}" alt="Pink Printed Dress"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale-flash">销售！</div>
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col_two_fifth product-desc">

                                <!-- Product Single - Price
                                ============================================= -->
                                <div class="product-price"> <ins>¥{{$k->price}}</ins></div><!-- Product Single - Price End -->

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div><!-- Product Single - Rating End -->

                                <div class="clear"></div>
                               

                                <!-- Product Single - Quantity & Cart Button
                                ============================================= -->
                                <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data' action="/home/gouwu">
                                    <div class="quantity clearfix">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                        <input type="button" value="+" class="plus">
                                        <input type="hidden" name="goodsid" value="{{$k->id}}" />
                                    </div>
                                    {{csrf_field()}}
                                    <button type="submit" id='submit' class="add-to-cart button nomargin">添加到购物车</button>&nbsp;
                                    <a href=""><img src="/homes/images/hui.png" width="40px" height="35px" alt="" id="shoucang"></a>
                                </form><!-- Product Single - Quantity & Cart Button End -->

                                <div class="clear"></div>
                                <div class="line"></div>
                               
                                <!-- Product Single - Short Description
                                ============================================= -->
                                <p>安全提示：
                                            请勿随意接收任何来源不明的文件，请勿随意点击任何来源不明的链接。涉及资金往来的事项请务必仔细核对资金往来信息。 天猫不会以订单有问题，让您提供任何银行卡、密码、手机验证码！遇到可疑情况可在钱盾“诈骗举报”中进行举报, 安全推荐

                                            推荐安全软件：钱盾UC浏览器</p>
                                <p>内容声明：
                                            天猫为第三方交易平台及互联网信息服务提供者，天猫（含网站、客户端等）所展示的商品/服务的标题、价格、详情等信息内容系由店铺经营者发布，其真实性、准确性和合法性均由店铺经营者负责。天猫提醒用户购买商品/服务前注意谨慎核实。如用户对商品/服务的标题、价格、详情等任何信息有任何疑问的，请在购买前通过阿里旺旺与店铺经营者沟通确认；天猫存在海量店铺，如用户发现店铺内有任何违法/侵权信息，请立即向天猫举报并提供有效线索。</p>
                                <ul class="iconlist">
                                    <li><i class="icon-caret-right"></i>  动态颜色选项</li>
                                    <li><i class="icon-caret-right"></i>  大量尺寸选项</li>
                                    <li><i class="icon-caret-right"></i>  30天退货政策</li>
                                </ul><!-- Product Single - Short Description End -->

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="panel panel-default product-meta">
                                    <div class="panel-body">
                                        <span itemprop="productID" class="sku_wrapper">库存: <span class="sku">8465415</span></span>
                                        <span class="posted_in">类别: <a href="#" rel="tag">礼服</a>.</span>
                                        <span class="tagged_as">标签: <a href="#" rel="tag">粉红</a>, <a href="#" rel="tag">短</a>, <a href="#" rel="tag">服饰</a>, <a href="#" rel="tag">印刷的</a>.</span>
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class="si-share noborder clearfix">
                                    <span>分享:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class="col_one_fifth col_last">

                                

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <h3>100%原创</h3>
                                    <p class="notopmargin">我们保证销售原品牌。</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <h3>支付选项</h3>
                                    <p class="notopmargin">我们接受VISA、万事达卡和美国运通卡。</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-truck2"></i>
                                    </div>
                                    <h3>免费送货</h3>
                                    <p class="notopmargin">免费送达100 +地点订单高于40美元。</p>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-undo"></i>
                                    </div>
                                    <h3>30天时返回</h3>
                                    <p class="notopmargin">返回或交换物品在30天内购买。</p>
                                </div>

                            </div>

                            <div class="col_full nobottommargin">

                                <div class="tabs clearfix nobottommargin" id="tab-1">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> 描述</span></a></li>
                                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> 附加信息</span></a></li>
                                        <li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> 评论（2）</span></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <p>粉红印花服装，编织，圆领，钥匙孔和扣在后面，无袖，隐藏拉链在左侧缝，腰带腰带带轻微聚集在下面，品牌贴花？在左前边，有一个附加的衬里。</p>
                                            配备了一个白色，纤细的合成带，有一个唐扣。
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">

                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>尺寸</td>
                                                        <td>中小型 &amp; 大的</td>
                                                    </tr>
                                                    <tr>
                                                        <td>颜色</td>
                                                        <td>粉红 &amp; White</td>
                                                    </tr>
                                                    <tr>
                                                        <td>腰部</td>
                                                        <td>26 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>长度</td>
                                                        <td>40 cm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>胸部</td>
                                                        <td>33 英寸</td>
                                                    </tr>
                                                    <tr>
                                                        <td>织物</td>
                                                        <td>棉、丝 &amp; 合成的</td>
                                                    </tr>
                                                    <tr>
                                                        <td>担保</td>
                                                        <td>3 月</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">

                                            <div id="reviews" class="clearfix">

                                                <ol class="commentlist clearfix">

                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">

                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
                                                                    <span class="comment-avatar clearfix">
                                                                    <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">约翰多伊<span><a href="#" title="Permalink to this comment">2014年4月24日上午10:46</a></span></div>
                                                                <p>非常棒！之前看中了这个款一直没买担心自己穿不出模特那种效果，其实也还好，只要不是特别胖的身材穿这都还蛮好看，主要是这个设计很简约大方，又有些俏皮可爱，买了拿回来立马被妹妹抢走了，哈哈正好送给她穿了，物流也很快很喜欢！</p>
                                                                <div class="review-comment-ratings">
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star-half-full"></i>
                                                                </div>
                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>
                                                    </li>

                                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                                        <div id="comment-1" class="comment-wrap clearfix">

                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
                                                                    <span class="comment-avatar clearfix">
                                                                    <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content clearfix">
                                                                <div class="comment-author">玛丽简<span><a href="#" title="Permalink to this comment">2014年6月16日下午6点</a></span></div>
                                                                <p>很满意！！性价比很高！裤子也很好看！【以前在天猫淘宝上买东西,都是系统好评,基本没有认真评价过,不知道浪费了多少积分了,现在才知道淘宝评论积分可以涨气值呢,这才知道好评的重要性,这个福利实在太赞了,妥妥的每条都来评论一下,赚积分,评论80个字以上,可以得到50个积分!从此我无论买什么东西都会把这短话复制下来粘贴。】</p>
                                                                <div class="review-comment-ratings">
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star3"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </div>
                                                            </div>

                                                            <div class="clear"></div>

                                                        </div>
                                                    </li>

                                                </ol>

                                                <!-- Modal Reviews
                                                ============================================= -->
                                                <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">添加评论</a>

                                                <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="reviewFormModalLabel">提交审查</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

                                                                    <div class="col_half">
                                                                        <label for="template-reviewform-name">名字 <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                                                            <input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col_half col_last">
                                                                        <label for="template-reviewform-email">邮箱 <small>*</small></label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">@</span>
                                                                            <input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>

                                                                    <div class="col_full col_last">
                                                                        <label for="template-reviewform-rating">Rating</label>
                                                                        <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                                                                            <option value="">-- Select One --</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="clear"></div>

                                                                    <div class="col_full">
                                                                        <label for="template-reviewform-comment">Comment <small>*</small></label>
                                                                        <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                                                                    </div>

                                                                    



                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- Modal Reviews End -->

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach
                    </div>

                 

                    <div class="col_full nobottommargin">

                       

                      

                        <script type="text/javascript">

                            jQuery(document).ready(function($) {

                                var ocProduct = $("#oc-product");

                                ocProduct.owlCarousel({
                                    margin: 30,
                                    nav: true,
                                    navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
                                    autoplayHoverPause: true,
                                    dots: false,
                                    responsive:{
                                        0:{ items:1 },
                                        480:{ items:2 },
                                        768:{ items:3 },
                                        992:{ items:4 }
                                    }
                                });

                            });


                        
                        </script>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->
            


            <div class="container clearfix" style="background-color: #333; width:100%;">
                    <center>
                    <div class="col-md-12 clearfix" style="height:60px">
                        
                        @foreach($aa as $k => $v)
                            <a href="{{$v->url}}">{{$v->name}}</a>&nbsp;|&nbsp;


                        @endforeach
                        
                    </div>
                    </center>

                    

                </div>


<script type="text/javascript">

    //加法运算
    $('.plus').click(function(){

        //获取数量
        var num = $(this).prev().val();

        num++;
        //加完之后让数量发生改变
        $(this).prev().val(num);


        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }

        //获取单价
        var pc = $(this).parents('tr').find('.price').text();

        //加完之后让小计发生改变

        $(this).parents('tr').find('.xiaoji').text(accMul(pc,num));
    
        totals();
    })

    $('.minus').click(function(){

        var mins = $(this).next().val();

        mins--;
        if(mins <= 1){

            mins = 1;
        }

        //减完让数量发生改变
        $(this).next().val(mins);

        //减完让小计发生改变
        //获取单价
        var pc = $(this).parents('tr').find('.price').text();

        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }

        //加完之后让小计发生改变

        $(this).parents('tr').find('.xiaoji').text(accMul(pc,mins));

        totals();

    })

</script>
@endsection