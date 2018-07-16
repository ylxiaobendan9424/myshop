
@extends('layout.infos')

@section('content')
		
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
						<div class="user-infoPic" style="height:180px;">
							
							<p class="am-form-help" style="height:90px;">头像:</p>
							<div class="filePic" style="height:30px;">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								@foreach($res as $k=>$v)
								<img class="am-circle am-img-thumbnail" src="{{$v->profile}}" alt="" />
								@endforeach
							</div>
							<div class="filePic" style="height:30px;">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								
							</div>

							
							<div class="info-m" style="height:30px;">
								<div><b>用户名：@foreach($res as $k=>$v)<i>{{$v->username}}</i>@endforeach</b></div>
								
								
							</div>
						</div>

						<!--个人信息 -->
						<div class="info-main">
						@foreach($res as $k=>$v)
							<form class="am-form am-form-horizontal">
								
								<div class="am-form-group" style="height:30px;">
									<label for="user-name2" class="am-form-label">昵称</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="nickname" value="{{$v->nickname}}">

									</div>
								</div>

								<div class="am-form-group" style="height:30px;">
									<label for="user-name" class="am-form-label">用户名</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="name"  value="{{$v->username}}">

									</div>
								</div>

								<div class="am-form-group" style="height:30px;">
									<label class="am-form-label">性别</label>
									<div class="am-form-content sex">
									
										
										<select name="" id="" style="width:175px;">
										
											<option value="男" @if($v->sex=='男')selected @endif>男</option>
										
											<option value="女" @if($v->sex=='女')selected @endif>女</option>

											<option value="保密" @if($v->sex=='保密')selected @endif>保密</option>
										</select>
										
										
									</div>
								</div>

								
								<div class="am-form-group" style="height:30px;">
									<label for="user-phone" class="am-form-label">电话</label>
									<div class="am-form-content">
										<input id="user-phone" placeholder="telephonenumber" type="tel" value="{{$v->phone}}">

									</div>
								</div>
								<div class="am-form-group" style="height:30px;">
									<label for="user-email" class="am-form-label">邮箱</label>
									<div class="am-form-content">
										<input id="user-email" placeholder="Email" type="email" value="{{$v->email}}">

									</div>
								</div>
								<div class="am-form-group address" style="height:30px;">
									<label for="user-address" class="am-form-label">默认收货地址:</label>
									<select name="" id="" style="width:400px;">
										<option value="" selected>123456</option>



									</select>
								</div>
								<div class="am-form-group safety" style="height:30px;">
									
									<div class="am-form-content safety">
										<a href="safety.html">

											<span class="am-icon-angle-right"></span>

										</a>

									</div>
								</div>
								<div class="info-btn">

									<input type="submit" value="保存" style="font-size:18px;">
									
								</div>

							</form>
						@endforeach
									
						</div>

					</div>

				</div>
				
			</div>

			
		</div>
		


@endsection