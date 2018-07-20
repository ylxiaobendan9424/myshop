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


        <form action="/admin/dingdan/{{$res->id}}" method='post' class="mws-form" enctype='multipart/form-data'>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">数量</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='cnt' value='{{$res->cnt}}'>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">总金额</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='sum' value='{{$res->sum}}'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系人</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='name'  value='{{$res->name}}'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">电话</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='phone'  value='{{$res->phone}}'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">地址</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name='address'  value='{{$res->address}}'>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name='status' value='{{$res->status}}' checked='checked'> <label>已收货</label></li>
                            <li><input type="radio" name='status' value='{{$res->status}}'> <label>待收货</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">

                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="submit" class="btn btn-success" value="确认修改">
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