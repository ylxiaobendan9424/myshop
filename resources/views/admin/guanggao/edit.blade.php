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


        <form action="/admin/guanggao/{{$res->id}}" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">广告投放商名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='gname' value='{{$res->gname}}'>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">联系手机号</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='gphone' value='{{$res->gphone}}'>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">广告图片</label>
                    <div class="mws-form-item">
                        <!-- <input type="file" class="small" name='profile'> -->
                         <img src="{{$res->gimage}}" alt="" width='200'>

                        <input type="file" name='gimage' class="fileinput-preview" style="width: 100%; padding-right: 84px;" readonly="readonly" placeholder="No file selected...">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">广告描述</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='gtext'  value='{{$res->gtext}}'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name='status' value='1' checked='checked'> <label>启动</label></li>
                            <li><input type="radio" name='status' value='0'> <label>禁止</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">

                {{csrf_field()}}
                {{method_field('PUT')}}
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