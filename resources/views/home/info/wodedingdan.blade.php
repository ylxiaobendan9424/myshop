
@extends('layout.infos')

@section('content')
@foreach($res as $k=>$v)

<form action="/home/comment/add/{{$v->o_id}}" style="margin:50px 0px 0px 80px;">
@endforeach
	<center>
	<table  class="car_tab" style="width:750px;" cellspacing="0" cellpadding="0">
		<tr style="height:50px;">
			<th class="car_th" width="60">商品名</th>
			<th class="car_th" width="60">商品图</th>
			<th class="car_th" width="60">商品总价</th>
			<th class="car_th" width="60">联系电话</th>
			<th class="car_th" width="90">详细地址</th>
			<th class="car_th" width="100">订单号</th>
			<th class="car_th" width="90">下单时间</th>
			<th class="car_th" width="50">操作</th>
		</tr>
		@foreach($res as $k=>$v)
		@if($id == $v->u_id )
		<tr style="height:50px;">
			<td>{{$v->gname}}</td>
			<td><img src="{{$v->gpic}}" alt="" style="width:50px;"></td>
			<td>¥{{$v->sum}}</td>
			<td>{{$v->phone}}</td>
			<td>{{$v->address}}</td>
			<td>{{$v->o_id}}</td>
			<td>{{$v->create_at}}</td>
			<td>
				<input type="submit" value="评价">
				<!-- <input type="submit" value="删除"> -->
			</td>
		</tr>
		@endif
		@endforeach
	</table>
	</center>
</form>








@endsection