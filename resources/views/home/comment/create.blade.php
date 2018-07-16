@extends('layout.homes')
@section('title','评论')
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
	.cart-empty{
		height: 98px;
	    padding: 80px 0 120px;
	    color: #333;

	}

	.cart-empty .message{
		height: 98px;
	    padding-left: 341px;
	    background: url(/uploads/no-login-icon.png) 250px 22px no-repeat;
	}

	.cart-empty .message .txt {
	    font-size: 14px;
	}
	.cart-empty .message li {
	    line-height: 38px;
	}

	ol, ul {
	    list-style: outside none none;
	}

	.ftx-05, .ftx05 {
		color: #005ea7;
	}
	
	a {
	    color: #666;
	    text-decoration: none;
	    
	    font-size:12px;
	}	
</style>

@section('page')
<section id="page-title">

	<div class="container clearfix">
		<h1>评论</h1>
		<ol class="breadcrumb">

			<li><a href="/home">首页</a></li>

			<li><a href="#">评论</a></li>
		</ol>
	</div>

</section><!-- #page-title end -->

@endsection
@section('content')
<div class="content-wrap">

	<div class="container clearfix lamp203">

		<div class="table-responsive bottommargin">
			
			
			<table class="table cart">
				<thead>
					<tr>
						<th class="cart-product-remove">商品名</th>
						<th class="cart-product-thumbnail">用户名</th>
						<th class="cart-product-name">订单号</th>
						<th class="cart-product-price">评论内容</th>
						<th class="cart-product-price">评价</th>
						<th class="cart-product-price">时间</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						
						<td class="cart-product-price">
							{{$v->gname}}
						</td>

						<td class="cart-product-price">
							12345678
						</td>

						<td class="cart-product-price">
							1234567u
						</td>

						<td class="cart-product-quantity">
							12345678i
						</td>

						<td class="cart-product-subtotal">
							1234567i
						</td>

						<td class="cart-product-remove">
							12345678o
						</td>

					</tr>
					

					
				</tbody>
			</table>
			
		</div>


	</div>

</div>

@endsection
