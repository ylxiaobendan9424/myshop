
@extends('layout.infos')
<link href="/css/infstyle.css" rel="stylesheet" type="text/css">
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')

		<form action="/info/update" method="get" class="am-form am-form-horizontal" enctype="multipart/form-data">
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人信息</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr/>

						<!--头像 -->
						头像:<div class="user-infoPic">
							
							
							<div style="height:80px;">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<img class="am-circle am-img-thumbnail" src="{{$res->profile}}" style="width:80px;hight:80px;" alt=""  />

							</div>
							<div>
							
								<input type="file" allowexts="gif,jpeg,jpg,png,bmp" name="profile" >
								<!-- 上传头像<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*"> -->
							
							</div>
							
								
						</div>
						<div style="margin:10px;">
							<b>用户名：<i>{{$res->username}}</i></b>
						</div>

						<!--个人信息 -->
						<div class="info-main">
						
							
								
										
									
										昵称:<input type="text" id="user-name2" placeholder="nickname" name="nickname" value="{{$res['user_detail']->nickname}}">

									
						

								
										用户名<input type="text" name="username" id="user-name2" placeholder="name"  value="{{$res->username}}">

								
										性别<select name="sex" id="" style="width:175px;">
										
											<option value="男" @if($res['user_detail']->sex=='男')selected @endif>男</option>
										
											<option value="女" @if($res['user_detail']->sex=='女')selected @endif>女</option>

											<option value="保密" @if($res['user_detail']->sex=='保密')selected @endif>保密</option>
										</select>
										
							
										电话<input id="user-phone" name="phone" placeholder="telephonenumber" type="tel" value="{{$res->phone}}">

									
										邮箱<input id="user-email" name="email" placeholder="Email" type="email" value="{{$res->email}}">

									
								
								<div class="am-form-group safety">
									
									<div class="am-form-content safety">
										<a href="safety.html">

											<span class="am-icon-angle-right"></span>

										</a>

									</div>
								</div>
								<div class="info-btn" style="margin:10px;">
									
									<input type="submit" value="保存" style="font-size:18px;">
									
								</div>

							
									
						</div>

					</div>

				</div>
				
			</div>

			
		</div>
		{{ csrf_field() }}

</form>
@endsection