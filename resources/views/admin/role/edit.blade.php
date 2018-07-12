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


    	<form action="/admin/role/{{$res->id}}" method='post' class="mws-form" enctype='multipart/form-data'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">角色名称</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='rolename' value="{{$res->rolename}}">
    				</div>
    			</div>


    		</div>
    		<div class="mws-button-row">

    			{{csrf_field()}}
                {{method_field('PUT')}}
    			<input type="submit" class="btn btn-success" value="修改">
    		</div>
    	</form>
    </div>
</div>


@endsection

@section('js')
<script type="text/javascript">



	$('.mws-form-message').fadeOut(8000);

</script>
@endsection