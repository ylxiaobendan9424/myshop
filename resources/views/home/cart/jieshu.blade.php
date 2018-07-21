@extends('layout.homes')

@section('page')


@endsection

@section('content')
<center>
<div class="content mar_20" style="margin-top:100px;">
    <img src="/images/img3.jpg" />        
</div>  

 <div class="content mar_20">
    	
        <!--Begin 银行卡支付 Begin -->
    	<div class="warning">        	
            <table border="0" style="width:1000px; text-align:center;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td style="font-size:18px;">
                	感谢您在本店购物！您的订单已提交成功，请记住您的订单号: <font color="#ff4e00">{{$oid}}</font>
                </td>
              </tr>
              <tr>
                <td style="font-size:14px; font-family:'宋体'; padding:10px 0 20px 0; border-bottom:1px solid #b6b6b6;">
                	您选定的配送方式为: <font color="#ff4e00">顺丰快递</font>； &nbsp; &nbsp;您选定的支付方式为: <font color="#ff4e00">支付宝</font>； &nbsp; &nbsp;您的付款金额为: <font color="#ff4e00">￥{{$sum}}</font>
                </td>
              </tr>
                <td style="height:100px;">
                    <a href="/info/wodedingdan"><span style="color: red;text-decoration: underline;">查看我的订单</span></a>
                	<a href="/home/cart"><span style="color: red;text-decoration: underline;">查看我的购物车</span></a>
                </td>
            </table>        	
        </div>
        <!--Begin 银行卡支付 Begin -->
    
     
        
        
    </div>
	<!--End 第三步：提交订单 End--> 
</center>
@endsection