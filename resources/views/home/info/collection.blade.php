
@extends('layout.infos')
    <script type="text/javascript" src="/homes/js/jquery.js"></script>

<style>
	.kuang{
		float:left;
		width:150px;
		height:200px;
		border:0px solid black;
		margin: 10px;

	}
</style>
@section('content')
<form action="" method="get">
{{csrf_field()}}
 
	<div>
@foreach($res as $k=>$v)

		<div class='kuang' id="del_{{$v->id}}">  
			<table>
			
			<a href="javascrpit:void()"><span class="clicks" gid="{{$v->id}}">X</span></a>
				<tr>
					<td><a href="/home/details/{{$v->goods_id}}"><img src="{{$v->goodspic->gpic}}" alt="" width="150px" height="150px"></a></td>
				</tr>
				<tr>
					<td>{{$v->goodspic->goods->gname}}</td>
				</tr>
				<tr>
					<td>{{$v->goodspic->goods->price}}</td>
				</tr>
			
			</table>
		</div>
@endforeach
 
	</div>
</form>
<script>
	$('.clicks').click(function(){
		var id=$(this).attr('gid');
		 $.ajax({
                url:'/info/collection/del',
                type:'get',
                data:{'id':id},
                dataType:'json',
                success:function(mes){
                	// console.log(mes);
                    if(mes=='0'){
                        alert('删除成功');
                        $('#del_'+id).remove();
                    }else{
                         alert('操作错误');
                    }
                },
                error:function(err){
                    console.log(err);
                },
                anysc:true
            })
            return false;
		})
</script>




@endsection