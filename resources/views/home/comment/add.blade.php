
@extends('layout.infos')
<link href="/css/appstyle.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
@section('content')

<div class="comment-main">

	<div class="comment-list">
	@foreach($aa as $k=>$v)
	@if($v->gid==$bb->g_id)
<form action="/home/comment/index/{{$id}}" method="post">

		<div class="/home/comment/create" style="width:180px;height:180px;">
			<a href="#" class="J_MakePoint">
				<img src="{{$v->gpic}}" class="itempic">
			</a>
		</div>

		<div class="item-title">

			<div class="item-name">
				<a href="#">
					<p class="item-basic-info">{{$v->gname}}</p>
				</a>
			</div>
			<div class="item-info">
				<div class="info-little">
					颜色：<span>{{$v->color}}</span>
					
				</div>
				<div class="item-price">
					价格：<strong>¥{{$v->price}}</strong>
				</div>										
			</div>
		</div>
		<div class="clear"></div>
		<div class="item-comment">
			<textarea placeholder="请写下对宝贝的感受吧，对他人帮助很大哦！" name="content"></textarea>
		</div>
		
		<div class="item-opinion">
			<li><i class="op1"></i><input type="radio" name="appraise" value="好评">好评</li>
			<li><i class="op2"></i><input type="radio" name="appraise" value="中评">中评</li>
			<li><i class="op3"></i><input type="radio" name="appraise" value="差评">差评</li>
		</div>
		
			<input type="submit" value="评价">
		{{ csrf_field() }}
		</form>
		@endif
		@endforeach
	</div>

	
</div>


@endsection