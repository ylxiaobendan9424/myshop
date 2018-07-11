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


        <form action="/admin/lunbo/{{$res->lid}}" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">
                

                <div class="mws-form-row">
                    <label class="mws-form-label">图片名</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='lname' value="{{$res->lname}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播路径</label>
                    <div class="mws-form-item">
                        <!-- <input type="file" class="small" name='profile'> -->
                        <img src="{{$res->url}}" width="100px">

                        <input type="file" name='url' class="fileinput-preview" style="width: 100%; padding-right: 84px;" readonly="readonly" placeholder="No file selected..." >
                    </div>
                </div>

                
                
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">

                            <li><input type="radio" name='status' value='1' @if($res->status ==1 ) checked @endif> <label>发布</label></li>
                            <li><input type="radio" name='status' value='0' @if($res->status ==0 ) checked @endif> <label>禁用</label></li>
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