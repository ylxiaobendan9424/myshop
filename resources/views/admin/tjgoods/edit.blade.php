@extends('layout.admins')

@section('title')


<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>


@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span></span>
    </div>
    <div class="mws-panel-body no-padding">


    	<form action="/admin/tjgoods/update/{{$res->id}}" method='post' class="mws-form" enctype='multipart/form-data'>
    		<div class="mws-form-inline">


    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='gname' value='{{$gname}}' readonly>
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">价格</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='price' value='{{$res->gprice}}'>
                    </div>
                </div>
                {{csrf_field()}}

    			<input type="submit" class="btn btn-success" value="更新">
    		</div>
    	</form>
    </div>    	
</div>


@endsection

@section('js')
<script type="text/javascript">

	$('.mws-form-message').fadeOut(5000);

</script>
@endsection