
@extends('layout.infos')
<link href="/css/appstyle.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
@section('content')

<div class="comment-main">

	<div class="comment-list">
<form action="">
		<div class="item-pic" style="width:180px;height:180px;">
			<a href="#" class="J_MakePoint">
				<img src="../images/comment.jpg_400x400.jpg" class="itempic">
			</a>
		</div>

		<div class="item-title">

			<div class="item-name">
				<a href="#">
					<p class="item-basic-info">美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
				</a>
			</div>
			<div class="item-info">
				<div class="info-little">
					颜色：<span>洛阳牡丹</span>
					
				</div>
				<div class="item-price">
					价格：<strong>19.88元</strong>
				</div>										
			</div>
		</div>
		<div class="clear"></div>
		<div class="item-comment">
			<textarea placeholder="请写下对宝贝的感受吧，对他人帮助很大哦！" name="content"></textarea>
		</div>
		
		<div class="item-opinion">
			<li><i class="op1"></i><input type="radio" name="appraise">好评</li>
			<li><i class="op2"></i><input type="radio" name="appraise">中评</li>
			<li><i class="op3"></i><input type="radio" name="appraise">差评</li>
		</div>
		
		<input type="submit" value="评价">
		</form>
	</div>

	
</div>


@endsection