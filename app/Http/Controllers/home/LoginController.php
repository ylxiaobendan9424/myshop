<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Hash;
use DB;

class LoginController extends Controller
{
    //
    public function login()
    {   
        $aa = DB::table('link')->get();
    	return view('home.login.login',['aa'=>$aa]);
    }

    public function dologin(Request $request)
    {

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

		session(['username'=>$uname->username]);

		return redirect('/home');
    }

    
}
