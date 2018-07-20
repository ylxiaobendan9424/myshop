
@extends('layout.infos')
<style>
	.kuang{
		float:left;
		width:150px;
		height:200px;
		border:1px solid black;
		margin: 10px;

	}
</style>
@section('content')
@foreach($res as $k=>$v)
<form action="" method="get">
{{csrf_field()}}
	<div>
		<div class='kuang'>
			<table>
				<tr>
					<td><img src="/homes/images/logo.png" alt="" width="150px" height="150px"></td>
				</tr>
				<tr>
					<td>{{$v->gname}}</td>
				</tr>
				<tr>
					<td>{{$v->price}}</td>
				</tr>
			</table>
		</div>
		
	</div>
</form>

@endforeach




@endsection