@extends('layout.homes')
<style type="text/css">

body{ background:#EEEEEE;margin:0; padding:0; font-family:"微软雅黑", Arial, Helvetica, sans-serif; }

a{ color:#006600; text-decoration:none;}

a:hover{color:#990000;}

.top{ margin:5px auto; color:#990000; text-align:center;}

.info select{ border:1px #993300 solid; background:#FFFFFF;}

.info{ margin:5px; text-align:center;}

.info #show{ color:#3399FF; }

.bottom{ text-align:right; font-size:12px; color:#CCCCCC; width:1000px;}

</style>
 <script type="text/javascript" src="/js/area.js"></script>
@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    </div>
    <div class="mws-panel-body no-padding">




    	<form action="/home/address/{{$res->id}}" method="post" class="mws-form" enctype='multipart/form-data'>
    	


		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="name" value="{{$res->name}}" placeholder="请输入收货人">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">手机号</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="phone" value="{{$res->phone}}" placeholder="请输入11位手机号">
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="inputEmail3" class="col-sm-2 control-label">所在地</label>
			    <div class="col-sm-10">
			    	<div class="row">
					    	<!-- <div class="col-md-3">
							    <select name="address" class="form-control">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
								</select>
							</div>
							<div class="col-md-1">省</div>
							<div class="col-md-3">
							    <select name="address" class="form-control">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
								</select>
							</div>
							<div class="col-md-1">市</div>
							<div class="col-md-3">
							    <select name="address" class="form-control">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
								</select>
							</div>
							<div class="col-md-1">区</div> -->
											<div class="info">

					<div>

					<select id="s_province" name="s_province"></select>  

				    <select id="s_city" name="s_city" ></select>  

				    <select id="s_county" name="s_county"></select>

				    <script class="resources library" src="area.js" type="text/javascript"></script>

				    

				    <script type="text/javascript">_init_area();</script>

				    </div>

				    <div id="show"></div>

				</div>

				<script type="text/javascript">

				var Gid  = document.getElementById ;

				var showArea = function(){

					Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	

					Gid('s_city').value + " - 县/区" + 

					Gid('s_county').value + "</h3>"

											}

				Gid('s_county').setAttribute('onchange','showArea()');

				</script>

			    </div>

		  		</div>
		  </div>
		  
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label" >详细地址</label>
		    <div class="col-sm-10">
		     <textarea class="form-control" rows="3" placeholder="请输入详细地址" name="xxaddress" 	>{{$res->xxaddress}}</textarea>
		     
		    </div>
		  </div>
		  <!-- <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label name="xxaddress"">详细地址</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" rows="3"></textarea>
		    </div>
		  </div> -->

                 {{method_field('PUT')}}
    			{{csrf_field()}}
    			<input type="submit" class="btn btn-success" value="提交">
    		</div>
    	</form>
    </div>    	
</div>
</div>
@endsection