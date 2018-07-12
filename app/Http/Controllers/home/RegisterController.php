<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Hash;
use Mail;
use DB;

class RegisterController extends Controller
{
    //
    public function regist()
    {
        $aa = DB::table('link')->get();
    	return view('home.register.registe',['aa'=>$aa]);
    }

    public function doregist(Request $request)
    {

    	//表单验证

    	$res = $request->except('_token','repass');
        

    	$res['password'] = Hash::make($request->input('password'));
    	$res['profile'] = '/uploads/B2kALjN9Gz1530263220.jpg';
    	$res['status'] = '0';

        $res['token'] = str_random(50);

    	$data = User::create($res);

    	$id = $data->id;

    	$token = $data->token;

    	if($data){

            // return redirect('/home/login')->with('success','注册成功');
            //发送邮件
            Mail::send('email.remind', ['id'=>$id,'token'=>$token], function($m) use ($res) {

                $m->from(env('MAIL_USERNAME'), '百度网-人力资源部');

                $m->to($res['email'], $res['username'])->subject('百度网-入职邀请');
            });

            return view('home.register.tixing');

        }

    }


    public function jihuo(Request $request)
    {

    	$id = $request->input('id');

    	$token = $request->input('token');

    	$data = User::where('id',$id)->first();

    	if($data->token != $token){

    		abort(404);
    	}

    	$rs['status'] = '1';

    	$info = User::where('id',$id)->update($rs);

    	//try  catch

    	if($info){

    		return redirect('home/login')->with('success','激活成功');
    	}



    }
}
