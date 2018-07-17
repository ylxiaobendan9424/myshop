
@extends('layout.infos')

@section('content')


<form action="" style="margin:50px 0px 0px 80px;">
	<center>
	<table  class="car_tab" style="width:600px;" cellspacing="0" cellpadding="0">
		<tr style="height:50px;">
			<th class="car_th" width="60">收货人</th>
			<th class="car_th" width="80">联系电话</th>
			<th class="car_th" width="90">地址</th>
			<th class="car_th" width="120">详细地址</th>
			<th class="car_th" width="50">操作</th>
		</tr>
		@foreach($res as $k=>$v)
		@if($id==$v->uid)
		<tr style="height:50px;">
			<td>{{$v->name}}</td>
			<td>{{$v->phone}}</td>
			<td>{{$v->address}}</td>
			<td>{{$v->xxaddress}}</td>
			<td>
				<input type="submit" value="修改">
				<input type="submit" value="删除">
			</td>
		</tr>
		@endif
		@endforeach
	</table>
	</center>
</form>








@endsection