@extends('layout.homes')

    
@section('content')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            
        </span>
    </div>

    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">

           
           


<center>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
             aria-describedby="DataTables_Table_1_info" style="margin-top:70px;">
                <thead>
                    <tr role="row">
                    
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 66px;" aria-label="Browser: activate to sort column ascending">
                            序号
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 100px;" aria-label="Browser: activate to sort column ascending">
                            收货人
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 130px;" aria-label="Engine version: activate to sort column ascending">
                            联系手机号
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 200px;" aria-label="CSS grade: activate to sort column ascending">
                           地址
                        </th>
                         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" style="width: 300px;" aria-label="CSS grade: activate to sort column ascending">
                          详细地址
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                         rowspan="1" colspan="1" style="width: 60px;" aria-label="CSS grade: activate to sort column ascending">
                           操作

                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                   @foreach($address as $k => $v)
                    

                    <tr class="@if($k % 2 == 1)  odd   @else even  @endif">
                        <td class="id">
                            {{$k+1}}
                        </td>
                        <td class="gname">
                            {{$v->name}}
                        </td>
                        <td class="phone ">
                            {{$v->phone}}
                            
                        </td> 
                        <td class="address ">
                            {{$v->address}}
                            
                        </td>
                        <td class="xxaddress">
                            {{$v->xxaddress}}
                            
                        </td>
                         <td class=" ">
                            <!-- @if($v->status == '1')
                                启用
                            @else
                                禁止
                            @endif -->

                            
                            {{--checkfun($v->status)--}}
                        </td>
                         <td class=" ">
                            <a href="/home/address/{{$v->id}}/edit" class='btn btn-success'>修改</a>

                            <form action="/home/address/{{$v->id}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}

                                {{method_field('DELETE')}}
                                <button  class='btn btn-danger'>删除</button>
                               
                            </form>

                            
                        </td>
                    </tr>

                 
                    @endforeach
               
                </tbody>
            </table>
            </center>
             </form>
            <center> <a href="/home/dizhi"><button class='btn btn-info'>我的地址</button></a></center>

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


               
            </div>
        </div>
    </div>
</div>

@endsection
