@extends('layout.admins')

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="/admins/js/libs/jquery.min.js" media="screen">
<script></script>
<style type="text/css">
    
  /*   tbody{
      overflow:hidden;
  
     
      table-layout:fixed;只有定义了表格的布局算法为fixed，下面td的定义才能起作用。
  
  }
     .content{
    overflow: hidden; 
    text-overflow:ellipsis;  
    white-space: nowrap; 
   } */
 </style>


@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            {{$title}}
        </span>
    </div>

    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

            <form action="/admin/goods" method='get'>
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select name="num" size="1" aria-controls="DataTables_Table_1">

                            <option value="10" @if($request->num == 10)   selected="selected" @endif>
                                10
                            </option>
                            <option value="20" @if($request->num == 20)   selected="selected" @endif>
                                20
                            </option>
                            <option value="30" @if($request->num == 30)   selected="selected" @endif>
                                30
                            </option>
                            
                        </select>
                        条数据
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        商品名:
                        <input type="text" name='gname' value="{{$request->gname}}" aria-controls="DataTables_Table_1">
                    </label>

                    <label>
                        价格:
                        <input type="text" name='price' value="{{$request->price}}" aria-controls="DataTables_Table_1">
                    </label>

                    <button class='btn btn-info'>搜索</button>
                </div>
            </form>



            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 20px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                            ID
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 30px;" aria-label="CSS grade: activate to sort column ascending">
                           分类
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-label="Browser: activate to sort column ascending">
                            商品名
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                            价格
                        </th>
                       <!--  <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 170px;" aria-label="Engine version: activate to sort column ascending">
                            颜色
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 126px;" aria-label="CSS grade: activate to sort column ascending">
                           尺码
                        </th> -->

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" width='200px'aria-label="CSS grade: activate to sort column ascending">
                           详情
                        </th>




                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 80px;" aria-label="CSS grade: activate to sort column ascending">
                           状态
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 140px;" aria-label="CSS grade: activate to sort column ascending">
                           操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all" style=" overflow:hidden;   table-layout:fixed;">
                    @foreach($res as $k => $v)
                        
                    <tr class="@if($k % 2 == 1)  odd   @else even  @endif">
                        <td class="">
                            {{$v->id}}
                        </td>

                        <td class=" ">
                            {{$v->cateid}}
                            
                        </td>
                        <td class="uname">
                            {{$v->gname}}
                        </td>
                        <td class=" ">
                            {{$v->price}}
                        </td>
                     

                        <td class="content" style="width:200px; voerflow:hidden;">
                            {!!$v->content!!}
                            
                        </td>
                        <!-- <td class=" "> -->
                             @if($v->status == 1)
                                    <td ><button class="btn btn-danger sjia" id="<?php echo $v->id ?>" onclick="stu({{$v->id}})" value="1">下架</button></td>
                                    @else
                                    <td ><button class="btn btn-success  sjia" id="<?php echo $v->id ?>"  onclick="stu({{$v->id}})" value="0">上架</button></td>
                                    @endif
                        <!-- </td> -->

                         <td class=" ">
                            <a href="/admin/goods/{{$v->id}}/edit" class='btn btn-info'>修改</a>

                            <form action="/admin/goods/{{$v->id}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}

                                {{method_field('DELETE')}}
                                <button href="" class='btn btn-warning'>删除</button>

                            </form>
                            <a href="/admin/tjgoods/{{$v->id}}" class='btn btn-info'>促销</a>
                        </td>
                    </tr>
                 
                    @endforeach
               
                </tbody>
            </table>


            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>

            <style>
                .pagination li{
                    float: left;
                    height: 20px;
                    padding: 0 10px;
                    display: block;
                    font-size: 12px;
                    line-height: 20px;
                    text-align: center;
                    cursor: pointer;
                    outline: none;
                    background-color: #444444;


                  
                    text-decoration: none;
                    border-right: 1px solid #232323;
                    border-left: 1px solid #666666;
                    border-right: 1px solid rgba(0, 0, 0, 0.5);
                    border-left: 1px solid rgba(255, 255, 255, 0.15);
                    -webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                    -moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                }

                .pagination li a{
                      color: #fff;
                }


                .pagination .active{
                    background-color: #88a9eb;
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                }

                .pagination .disabled{
                        color: #666666;
                        cursor: default;
                }

                #paginate ul{
                    
                    margin:0px;
                }
            </style>
            <div class="dataTables_paginate paging_full_numbers" id="paginate">

                <!-- {{$res->links()}} -->

                <!-- $arr  ====> ['num'=20,'search'=>'zz'] -->

                {{ $res->appends($request->all())->links() }}
                <!-- {{ $res->appends($request->all())->render() }} -->

               
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

            <script type="text/javascript">
                //错误信息



                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                function stu($e){
                    var id = $e;
                    var status = $('.sjia'+'#'+id).val();
                    if(status == 1){
                        var aa = '你确定上架吗';
                    }else{  
                        var aa = '你确定下架吗';
                    }

                    console.log(id);
                    var vv = confirm(aa);

                    if(vv){
                        $.post('/admin/ajax',{id:id,status:status},function(data){
                            console.log(data);
                            if(data   == 1){
                                $('.sjia'+'#'+id).attr('class','btn btn-danger sjia').text('下架');
                                $('.sjia'+'#'+id).val(1);
                            }else if(data == 0){

                                $('.sjia'+'#'+id).attr('class','btn btn-success sjia').text('上架');
                                $('.sjia'+'#'+id).val(0);

                            }else{
                                alert('修改失败');
                            }
                        })
                    }
                }


        

</script>

@endsection