@extends('homes')
@section('title',$title)
@section('content')
<link rel="stylesheet" href="/admin/css/bootstrap.min.css">
<div class="container">
@if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <ul>
                    @foreach($errors -> all() as $error)
                       <li>{{ $error }}</li>
                       @endforeach
                </ul>        
        </div>
        @endif
<form action="/home/comment/insert" method="post">
	<b class="col-sm-3" style="font-size:40px">商品评价:</b>
  	<div class="form-group">
  		<div class="col-sm-6" style="font-size:40px">
	  		<div class="col-sm-7 pfq">
		  		<b id='1'><input name='' value='0' style='border:solid 0px red;display:none;'/>☆</b>
		  		<b id='2'><input name='' value='0' style='border:solid 0px red;display:none;'/>☆</b>
		  		<b id='3'><input name='' value='0' style='border:solid 0px red;display:none;'/>☆</b>
		  		<b id='4'><input name='' value='0' style='border:solid 0px red;display:none;'/>☆</b>
		  		<b id='5'><input name='' value='0' style='border:solid 0px red;display:none;'/>☆</b>
  			</div>
  		</div>
    	<label for="exampleInputFile"></label>
    	<textarea class="form-control" rows="4" name="content" clos="100" style="margin-top:80px;"></textarea>
 	</div>
  	<button type="submit" class="btn btn-info">评论</button>
  	{{ csrf_field() }}
</form>
</div>
<script src="/admin/js/jquery.min.js"></script>
<script>
	$('#1').click(function(){
		$(this).replaceWith("<b id='1'><input name='stars' value='1' style='border:solid 0px red;display:none;'/>★</b>");

	})
	$('#2').click(function(){
		$('#1').replaceWith("<b id='1'><input style='border:solid 0px red;display:none;'/>★</b>");
		$(this).replaceWith("<b id='2'><input name='stars' value='2' style='border:solid 0px red;display:none;'/>★</b>");
	})
	$('#3').click(function(){
		$('#1').replaceWith("<b id='1'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#2').replaceWith("<b id='2'><input style='border:solid 0px red;display:none;'/>★</b>");
		$(this).replaceWith("<b id='3'><input name='stars' value='3' style='border:solid 0px red;display:none;'/>★</b>");
	})
	$('#4').click(function(){
		$('#1').replaceWith("<b id='1'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#2').replaceWith("<b id='2'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#3').replaceWith("<b id='3'><input style='border:solid 0px red;display:none;'/>★</b>");
		$(this).replaceWith("<b id='4'><input name='stars' value='4' style='border:solid 0px red;display:none;'/>★</b>");
	})
	$('#5').click(function(){
		$('#1').replaceWith("<b id='1'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#2').replaceWith("<b id='2'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#3').replaceWith("<b id='3'><input style='border:solid 0px red;display:none;'/>★</b>");
		$('#4').replaceWith("<b id='4'><input style='border:solid 0px red;display:none;'/>★</b>");
		$(this).replaceWith("<b id='5'><input name='stars' value='5' style='border:solid 0px red;display:none;'/>★</b>");
	})

</script>
@endsection