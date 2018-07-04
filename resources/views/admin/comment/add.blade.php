@extends('layout.admins')

@section('title',$title)


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

    		@if (count($errors) > 0)
			    <div class="mws-form-message error">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li style='font-size:16px;list-style:none'>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif


    	<form action="/admin/comment" method='post' class="mws-form" enctype='multipart/form-data'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">商品id</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='goods_id'>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">用户id</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='user_id'>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">内容</label>
    				<div class="mws-form-item">
                        <textarea name="content" class="small" cols="30" rows="10"></textarea>
    					
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">创建时间</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='create_at'>
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">评价</label>
    				<div class="mws-form-item">

                        <select name="appraise" class="small">
                            <option value="0">好评</option>
                            <option value="1">中评</option>
                            <option value="2">差评</option>
                        </select>
    				</div>
    			</div>

    			
    			
    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" class="btn btn-success" value="提交">
    		</div>
    	</form>
    </div>    	
</div>


@endsection

@section('js')
<script type="text/javascript">
	
	/*setTimeout(function(){

		$('.mws-form-message').remove();

	},3000)*/

	$('.mws-form-message').fadeOut(5000);

</script>
@endsection