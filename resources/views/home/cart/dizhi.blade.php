
@extends('layout.homes')

<link href="/other/admin.css" rel="stylesheet" type="text/css">
		<link href="/other/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/other/personal.css" rel="stylesheet" type="text/css">
		<link href="/other/addstyle.css" rel="stylesheet" type="text/css">
		<script src="/other/jquery.min.js" type="text/javascript"></script>
		<script src="/other/amazeui.js"></script>
@section('title','地址管理')


		 <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
		
		

		@section('page')
		@endsection
	@section('content')
	
		<!--头 -->		
		<b class="line"></b>

		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-address">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">我的地址</strong></div>
						</div>
						<hr/>
						<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
							@foreach($res as $k=>$v)
							@if($v->status ==  '1')
							<li class="user-addresslist defaultAddr">
								<span class="new-option-r" ><i class="am-icon-check-circle"></i>默认地址</span>
								<p class="new-tit new-p-re">
									<span class="new-txt">{{$v->name}}</span>
									<span class="new-txt-rd2">{{$v->phone}}</span>
								</p>
								<div class="new-mu_l2a new-p-re">
									<p class="new-mu_l2cw">
									<span class="street">{{$v->address}}</span></p>
								</div>
								<div class="new-addr-btn">
									<a href="#"><i class="am-icon-edit"></i>编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);" onclick="delClick(this);" class="remove" ids='{{$v->id}}'><i class="am-icon-trash"></i>删除</a>
								</div>
							</li>
							@else
							<li class="user-addresslist">
								<span class="new-option-r" id1="{{$v->id}}" id="moren"><i class="am-icon-check-circle" ></i>设为默认</span>
								<p class="new-tit new-p-re">
									<span class="new-txt">{{$v->name}}</span>
									<span class="new-txt-rd2">{{$v->phone}}</span>
								</p>
								<div class="new-mu_l2a new-p-re">
									<p class="new-mu_l2cw">
										<span class="street">{{$v->address}}</span></p>
								</div>
								<div class="new-addr-btn">
									<a href="#"><i class="am-icon-edit"></i>编辑</a>
									<span class="new-addr-bar">|</span>
									<a href="javascript:void(0);" onclick="delClick(this);" class="remove" ids='{{$v->id}}'><i class="am-icon-trash"></i>删除</a>
								</div>
							</li>
							@endif
							@endforeach
						</ul>
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加地址</a>
						<!--例子-->
						
					</div>
					<form action="/home/queren" method="post">
						{{csrf_field()}}
					@foreach($res as $k=>$v)
					@if($v->status == '1')
					姓名： <input type="text" name="name" value="{{$v->name}}">	
					电话： <input type="txet" name="phone" value="{{$v->phone}}">
					地址：	<textarea name="address">{{$v->address}}</textarea>
					@endif
					@endforeach
					

					<div class="clear"></div>
					<div class="row">
						<div class="col-md-10 col-xs-10  nopadding">
														
							<input type="submit" class="button button-3d notopmargin fright" name="" value="提交">
							<a href="/home/address/create" class="button button-3d notopmargin fright">新建地址</a>
						</div>
					</div>
				</div>
				<!--底部-->
				</form>
			</div>

		</div>


<SCRIPT Language=VBScript><!--

//--></SCRIPT>
@endsection
@section('js')
<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								location.reload();
								
							});
							
							
							
						})
					</script>
<script>
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$('.remove').click(function(){


		var rs = confirm('删除商品?');

		if(!rs) return;

		//获取id
		var id = $(this).attr('ids');

		var ts = $(this);

		console.log(id);
		//发送ajax
		$.post('/home/remove',{id:id},function(data){

			if(data != '0'){

				ts.parents('tr').remove();
				
			} else {

				$('.lamp203').html(`<div class="cart-empty">
				    <div class="message">
				        <ul>
				            <li class="txt">
				                购物车空空的哦~，去看看心仪的商品吧~
				            </li>
				            <li class="mt10">
				                <a href="/home" class="ftx-05">
				                    去购物&gt;
				                </a>
				            </li>
				            
				        </ul>
				    </div>
				</div>`);
			}

		})


	})
	$('#moren').click(function(){
		var id = $(this).attr('id1');
		$.post('/home/moren',{'id':id},function(data){
			console.log(data);
		})
		// console.log(id);


	})
</script>
@endsection