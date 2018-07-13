@extends('layout.admins')
@section('title', $title)
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}"> 
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>商品ID</th>
                    <th>用户ID</th>
                    <th>评论</th>
                    <th>评价</th>
                    <th>操作</th>
                </tr>
                @foreach($comment as $k=>$v)
                <tr class='zong' id="">
                    <td>{{$v->id}}</td>
                    <td>{{$v->g_id}}</td>
                    <td>{{$v->u_id}} <b> 【{{($uname)}}】</b></td>
                    <td>{{$v->content}}</td>
                    <td>
                        @if($v->stars == 1)
                        ★
                        @elseif($v->stars == 2)
                        ★★
                        @elseif($v->stars == 3)
                        ★★★
                        @elseif($v->stars == 4)
                        ★★★★
                        @elseif($v->stars == 5)
                        ★★★★★
                        @else
                        啊哦没有星星啦
                        @endif
                        【{{$v->stars}}】
                    </td>
                    <td>
                        {{--<a class="btn btn-success btn-rounded btn-outline xou" href="#">修改</a>--}}
                        {{method_field('DELETE')}}
                        <a class="btn btn-danger btn-rounded btn-outline shan" href="#">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="/admin/js/jquery.min.js"></script>
    <script>

        // 修改弹窗
        $(".shan").click(function(){
            var tr = $(this);
            var ids = $(this).parents('tr').find('td').eq(0).text().trim();
            // console.log(ids);
            swal({
                title:"您确定要删除这条信息吗",text:"删除后将无法恢复，请谨慎操作！",type:"warning",showCancelButton:true,confirmButtonColor:"#DD6B55",confirmButtonText:"是的，我要删除！",cancelButtonText:"让我再考虑一下…"},
                    function(){
                        $.ajax({
                            url:'/admin/user/delete',
                            data:{'id':ids},
                            type:'DELETE',
                            headers:{
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                        }).done(function(data){
                            // console.log(data);
                            swal("操作成功!", "已成功删除数据！", "success");
                            tr.parents('tr').remove();  //  删除已被删除掉的节点
                        }).error(function(data){
                            // console.log(data);
                            swal("OMG", "删除操作失败了!", "error");
                        })
                    }
                    
                )
                });
    </script>

@endsection