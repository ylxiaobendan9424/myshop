<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\Dingdan;
use App\Models\Admin\Dingdanxiangqing;
use App\Http\Controllers\User;

class DingdanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(session()->all());
        // $user = DB::table('user')->where('username',session('uname'))->get();

        // foreach ($user as $k => $v) {
        //     $users=$v;
        // }
 
       //$dingdan = DB::table('orders')->where('u_id',$users->id)->get();

       // dd($dingdan);
       //   }
        $res = DB::table('orders')->get();
        $arr = ['num'=>$request->input('num'),'search'=>$request->input('search')];

         return view('/admin/dingdan/index',
            ['title'=>'浏览订单',
            //'dingdan'=>$dingdan,
            'arr'=>$arr,
            'res'=>$res

            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       // $dingdan = Dingdan::where('u_id',$u_id)->first();
       //  return view('admin.dingdan.edit',['title'=>'订单修改页面','dingdan'=>$dingdan]);
        //$ress = DB::table('orders')->get();
        // dd($ress);
        //$id = $ress->id;
        //dd($id);
        $res = DB::table('orders')->where('id',$id)->first();
        //dd($res);
        return view('admin.dingdan.edit',['title'=>'订单的修改页面','res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $this->validate($request, [
            'name' => 'required|regex:/^\S{1,12}$/',
            'phone'=>'required|regex:/^1[3456789]\d{9}$/',            
        ],[
            'name.required'=>'用户名不能为空',
            
            'phone.required'=>'手机号不能为空',
            'phone.regex'=>'手机号格式不正确'

        ]);
           $res = $request->except('_token','_method');    
        try{
             $data = Dingdan::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/dingdan')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $res = Gonggao::where('id',$id)->delete();
        if($res){
            return redirect('/admin/gonggao')->with('success','删除成功');
        
        }
    }


    public function xiangqing(Request $request,$id)
    {
        //dd($id);
        $res= DB:: table('orderxiangqing')->where('o_id',$id)->get();
        //dd($res);
        
         return view('/admin/dingdan/xiangqing',
            ['title'=>'订单详情',
              'res'=>$res
            //'arr'=>$arr

            ]);
    }
}
