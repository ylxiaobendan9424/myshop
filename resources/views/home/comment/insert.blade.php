
@extends('layout.infos')
<link href="/css/appstyle.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
@section('content')

<div class="comment-main">

	<div class="comment-list">
	{{--@foreach($comment as $k=>$v)--}}
<form action="">

		<div class="/home/comment/create" style="width:180px;height:180px;">
			<a href="#" class="J_MakePoint">
				<img src="111" class="itempic">
			</a>
		</div>

		<div class="item-title">

			<div class="item-name">
				<a href="#">
					<p class="item-basic-info">1</p>
				</a>
			</div>
			<div class="item-info">
				<div class="info-little">
					颜色：<span>1</span>
					
				</div>
				<div class="item-price">
					价格：<strong>¥1</strong>
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
		{{--@endforeach--}}
	</div>

	
</div>


@endsection