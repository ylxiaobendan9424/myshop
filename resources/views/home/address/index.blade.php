@extends('layout.homes')

    
@section('content')

<div class="row">
	<div class = "col-md-8 col-md-offset-2">
		<table class="table table-hover">
		  <tr>
		  	<th>收货人</th>
		  	<th>收货电话</th>
		  	<th>收货地址</th>
		  	<th>操作</th>
		  </tr>
		  <tr>
		  	<td>1</td>
		  	<td>1</td>
		  	<td>1</td>
		  	<td>
		  		<a href="" class='btn btn-success'>设为默认</a>
		  		<a href="" class='btn btn-info'>编辑</a>
		  		<a href="" class='btn btn-danger'>删除</a>
		  	</td>
		  </tr>
		</table>
	</div>
</div>

@endsection