<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\User;
use App\Models\admin\User_detail;

use DB;

class GerenxinxiController extends Controller
{
    //
    public function index()
    {
    	// dd(session('username'));
    	$res = User::where('username',session('username'))->with('user_detail')->first();
    	// $res = User::where('id',78)->with('user_detail')->first();
    	// dd($res);


    	return view('home.info.gerenxinxi',['res'=>$res]);
    }
    
    public function update(Request $request)
    {	
    	$user = $request ->except('_token','_method'); // 接收重表单传过来的数据筛除_token
    	// dd($request->file('profile'));
    	// dd($user);
    	// dd($user['profile']);

    	// $res = User::where('id',78)->with('user_detail')->first();  // 通过session 查询不变的条件
    	$res = User::where('username',session('username'))->with('user_detail')->first();

        $id = $res -> id;
        // dd($id);

    	 if($request->hasFile('profile')){

            //生成图片名称
            $name = str_random(10).time();
            // dd($name);

            $suffix = $request->file('profile')->getClientOriginalExtension();
            
			$request->file('profile') -> move('/pic',$name.'.'.$suffix);

			$res['profile'] = '/pic/'.$name.'.'.$suffix;

        }
    	// dd($id);
    	$userz = [];
    	$userz['username'] = $user['username'];
    	$userz['phone'] = $user['phone'];
    	$userz['email'] = $user['email'];
    	$userz['profile'] = $res['profile'];

    	$userf = [];
    	$userf['nickname'] = $user['nickname'];
    	$userf['sex'] = $user['sex'];

    	$date = User::where('id',$id)->update($userz);  // 修改主表1条数据
    	$data = User_detail::where('u_id',$id)->update($userf);  // 修改付表1条数据

    	if($date && $data){
    		return redirect('/info/info')->with('success','修改成功');
    	}
		return back()->with('error','修改失败');

    	
    	// $res = $request -> except('_token','_mothod','profile');

    	// $id = DB::table('user')->pluck('id');

     //    $rs = User::where('id',$id)->with('user_detail')->first(); 

     //    $img = $request-> hasFile('profile');

     //   

     //    // dd($img);
     //    $num = User::where('id',$id)->with('user_detail')->update([

     //        'nickname' => $res['nickname'],
     //        'username'  => $res->user_detail['username'],
     //        'sex'  => $res->user_detail['sex'],
     //        'phone' => $res->user_detail['phone'],
     //        'email' => $res->user_detail['email']
            

     //    ]);
     //    // echo $num;die;
     //    if($num){
     //        return redirect('/info/info')->with('success','修改成功');
     //    }else{
     //        return back()->with('error','修改失败');
     //    }
    }


    

}
