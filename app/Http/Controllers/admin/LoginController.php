<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder; 
use Session;
use Hash;
use App\Models\Admin\User;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login',['title'=>'后台的登录页面']);
    }

    public function dologin(Request $request)
    {
    	//表单验证

    	//获取数据
    	$res = $request->except('_token');

    	$uname = User::where('username',$res['username'])->first();

    	//获取用户名
    	if(!$uname){

    		return back()->with('error','用户名或密码不正确');
    	}

    	//判断密码
    	if (!Hash::check($res['password'], $uname->password)) {
		    // 密码对比...

		    //如果说密码失败
		    return back()->with('error','用户名或密码不正确');
		}

		//验证码
		if(session('code') != $res['code']){

			return back()->with('error','验证码不正确');
		}


		session(['uname'=>$uname->username]);

		session(['profile'=>$uname->profile]);

		return redirect('/admin/index');

    }

    //生成验证码方法
	public function captcha()
	{
	    $phrase = new PhraseBuilder;
	    // 设置验证码位数
	    $code = $phrase->build(4);
	    // 生成验证码图片的Builder对象，配置相应属性
	    $builder = new CaptchaBuilder($code, $phrase);
	    // 设置背景颜色
	    $builder->setBackgroundColor(123, 203, 230);
	    $builder->setMaxAngle(25);
	    $builder->setMaxBehindLines(0);
	    $builder->setMaxFrontLines(0);
	    // 可以设置图片宽高及字体
	    $builder->build($width = 90, $height = 30, $font = null);
	    // 获取验证码的内容
	    $phrase = $builder->getPhrase();
	    // 把内容存入session
	    //可以使用
	    // Session::flash('code', $phrase);

	    //
	    session(['code'=>$phrase]);
	    // 生成图片
	    header("Cache-Control: no-cache, must-revalidate");
	    header("Content-Type:image/jpeg");
	    $builder->output();
	}


	public function logout()
	{
		//第一步删除session里面存储的信息
		session(['uname'=>'']);

		//跳转到登录页面
		return redirect('admin/login');
	}

}
