@extends('layout.homes')

    
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="请输入收货人">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">手机号</label>
		    <div class="col-sm-10">
		      <input type="email" class="form-control" id="inputEmail3" placeholder="请输入11位手机号">
		    </div>
		  </div>
		  <div class="form-group">
		  	<label for="inputEmail3" class="col-sm-2 control-label">所在地</label>
			    <div class="col-sm-10">
			    	<div class="row">
			    	<div class="col-md-3">
					    <select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
						</select>
					</div>
					<div class="col-md-1">省</div>
					<div class="col-md-3">
					    <select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
						</select>
					</div>
					<div class="col-md-1">市</div>
					<div class="col-md-3">
					    <select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
						</select>
					</div>
					<div class="col-md-1">区</div>
			    </div>
		  		</div>
		  </div>
		  
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">详细地址</label>
		    <div class="col-sm-10">
		      <textarea class="form-control" rows="3"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">确定</button>
		    </div>
		  </div>
		</form>
	</div>
</div>
@endsection