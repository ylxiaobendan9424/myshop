
@extends('layout.homes')

@section('title','个人信息')

@section('page')
<section id="page-title">

	<div class="container clearfix">
		<h1>个人中心</h1>
		<ol class="breadcrumb">
			<li><a href="#">首页</a></li>
			<li><a href="#">购物车</a></li>
		</ol>
	</div>

</section><!-- #page-title end -->

@endsection

@section('content')

<div id="container">
    <div class="w">    
        <div id="content">
			<div id="sub">
				<div id="menu">
					<dl class="fore1">
						<dt id="_MYJD_setting">设置</dt>
						<dd class="fore1_1 curr" id="_MYJD_info">
							<a clstag="homepage|keycount|home2013|Homeyser" href="/info/info" target="_self">个人信息</a>
						</dd>
						<dd class="fore1_2" id="_MYJD_safe">
							<a clstag="homepage|keycount|home2013|Homesafe" href="/orders/users" target="_self">我的订单</a>
						</dd>
						
						
					</dl>
				</div>
			</div>
			
    		<div id="main">
                <div class="mod-main">
                    <div class="mt">
                        <ul class="extra-l">
                            <li class="fore-1"><a class="curr" href="https://i.jd.com/user/info">基本信息</a></li>
                        </ul>
                    </div>
	                <form action="/info/update/{$user.id}" method="post" enctype="multipart/form-data"> 
	                    
	                        <div class="user-set userset-lcol">
	                            <div class="form">
	                                <div class="item">
	                                    <span class="label"></span>
	                                    <div class="fl">
	                                        <div><strong>{$user->uname}</strong></div>
	                                    </div>
	                                </div>
	                                
	                                <div class="item">
	                                    <span class="label"><em>*</em>用户名：</span>
	                                    <div class="fl">
	                                        <input clstag="homepage|keycount|home2013|infoname" type="text" class="itxt" maxlength="20" id="nickName" name="uname" value="{$user.uname}">
	                                        <div class="clr"></div><div class="prompt-06"><span id="nickName_msg"></span></div>
	                                    </div>
	                                </div>
	                                <div class="item">
	                                    <span class="label"><em>*</em>性别：</span>
	                                    <div class="fl" clstag="homepage|keycount|home2013|infoGender">
	                                        <input type="radio" name="sex" class="jdradio" {if $user->sex=='m'}checked{/if} value="m" ><label class="mr10">男</label>
	                                        <input type="radio" name="sex" class="jdradio" {if $user->sex=='w'}checked{/if} value="w" ><label class="mr10">女</label>
	                                        <input type="radio" name="sex" class="jdradio" {if $user->sex=='x'}checked{/if} value="x" ><label class="mr10">保密</label>
	                                    </div>
	                                </div>
									
	                                <div class="item">
	                                    <span class="label"><em>*</em>头像：</span>
	                                    <div class="fl">
	                                        <input clstag="homepage|keycount|home2013|infoname" type="file" class="itxt" maxlength="20" id="nickName" name="upic" value="">
	                                        <div class="clr"></div><div class="prompt-06"><span id="nickName_msg"></span></div>
	                                    </div>
	                                </div>

	                                
									<div class="item">
	                                    <span class="label"><em>*</em>联系电话：</span>
	                                    <div class="fl">
	                                        <input clstag="homepage|keycount|home2013|infoname" type="text" class="itxt" maxlength="20" id="nickName" name="tel" value="{$user.tel}">
	                                        <div class="clr"></div><div class="prompt-06"><span id="nickName_msg"></span></div>
	                                    </div>
	                                </div>
	                                
									
									
	                                <div class="item" clstag="pageclick|keycount|201602251|3">
	                                    <span class="label"><em>*</em>收货地址：</span>
	                                    <div class="fl">
	                                        <input clstag="homepage|keycount|home2013|infoname2" type="text" class="itxt" maxlength="20" name="addr" id="realName" value="{$user.addr}">
	                                        <div class="clr"></div><div class="prompt-06"><span id="realName_msg"></span></div>
	                                    </div>
	                                </div>
	                     
	                                <div class="item">
	                                    <span class="label">&nbsp;</span>
	                                    <div class="fl">
	                                        <input id="code" value="850496" style="display:none">
	                                        <input id="rkey" value="736e6f5f315f67657455736572496e666fbeb0cbae383530343936" style="display:none">
	                                        <input type="submit" value="修改">
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                   </form>
                        <div id="user-info">
                            <div class="u-pic">
                                <img alt="用户头像" src="{$user.smupic}">
                                <div class="mask"></div>
                                <div class="face-link-box"></div>
                                <a href="https://i.jd.com/user/userinfo/showImg.html" class="face-link">修改头像</a>
                            </div>
                            <div class="info-m">
								<div><b>用户名：{$user.uname}</b></div>
                                <div class="u-level">
									<span class="rank r4">
										<s></s><a clstag="homepage|keycount|home2013|infoMember" href="https://usergrade.jd.com/user/grade" target="_blank">金牌会员</a>
									</span>
                                </div>
                                <!--<div class="shop-level">购物行为评级：<span><a target="_blank" href="//vip.jd.com/help_behaviorRating.html">
									<s id="userCredit" class="rank-sh rank-sh01"></s></a></span></div> -->
                                                            <div clstag="pageclick|keycount|201602251|4">小白信用：<a href="https://credit.jd.com/" target="_blank">开通后可查看</a></div>
                                                            <div>会员类型：个人用户</div>
                            </div>
                        </div>
						<div class="fr ac" style="width:280px;">
							  注：修改手机和邮箱请到<a clstag="homepage|keycount|home2013|infopay" class="ml5 ftx05" href="https://safe.jd.com/user/paymentpassword/safetyCenter.action">账户安全</a>
						</div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
