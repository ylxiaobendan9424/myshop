@extends('layout.homes')

@section('page')

 <!-- Page Title
        ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>确认订单</h1>
        <ol class="breadcrumb">
            <li><a href="/home">首页</a></li>
            <li><a href="/home/cart">购物车</a></li>
        </ol>
    </div>

</section><!-- #page-title end -->
@endsection
    
@section('content')
<div class="i_bg">  
	<center>
    <div class="content mar_20" style="margin:10px;">
    	<img src="/images/img2.jpg" />        
    </div>
    
	
    <div class="content mar_20">
    	
        <table border="0" class="car_tab" style="width:800px;" cellspacing="0" cellpadding="0">
              <tr>
                <td class="car_th" width="140">商品图片</td>
                <td class="car_th" width="140">商品名称</td>
                <td class="car_th" width="140">价格</td>
                <td class="car_th" width="150">购买数量</td>
                <td class="car_th" width="130">小计啊</td>
              </tr> 

              
              @foreach($res as $k=>$v)
              <tr>
              @foreach($arr as $k1=>$v1)
              @if($v->gid == $v1->gid)	
	              	<td><img src="{{$v1->gpic}}" style="width: 100px;"></td>
	          @endif
	          @endforeach
	              	<td>{{$v->gname}}</td>
	              	<td>{{$v->price}}</td>
	              	<td>1X{{$v->num}}</td>
	              	<td>￥{{$v->num*$v->price}}</td>
              	
              </tr>
              @endforeach
        </table>
    </div>
</center>
</div>
<div class="row">
	<div class="col-md-10 col-xs-10  nopadding">
									
		<a href="/home/jieshu" class="button button-3d notopmargin fright">结算</a>
	</div>
</div>
@endsection