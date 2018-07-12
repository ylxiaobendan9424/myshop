@extends('layout.homes')

@section('title','注册页面')


@section('page')
<section id="page-title">

	<div class="container clearfix">
		<h1>注册</h1>
		<ol class="breadcrumb">
			<li><a href="#">首页</a></li>
			<li><a href="#">注册</a></li>
		</ol>
	</div>

</section><!-- #page-title end -->

@endsection

@section('content')
<div class="content-wrap">

	<div class="container clearfix">

		<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
			<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>注册</div>
			<div class="acc_content clearfix">
				<form id="register-form" name="register-form" class="nobottommargin" action="/home/doregist" method="post">
					<div class="col_full">
						<label for="register-form-name">用户名:</label>
						<input type="text" id="register-form-name" name="username" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="register-form-password">密码:</label>
						<input type="password" id="register-form-password" name="password" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="register-form-repassword">确认密码:</label>
						<input type="password" id="register-form-repassword" name="repass" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="register-form-email">邮箱:</label>
						<input type="text" id="register-form-email" name="email" value="" class="form-control" />
					</div>

					<div class="col_full">
						<label for="register-form-phone">手机号:</label>
						<input type="text" id="register-form-phone" name="phone" value="" class="form-control" />
					</div>
					<div class="col_full nobottommargin">
						{{csrf_field()}}
						<button class="button button-3d button-black nomargin" id="register-form-submit">注册</button>
						
					</div>
				</form>
			</div>

		</div>

	</div>

</div>

@endsection