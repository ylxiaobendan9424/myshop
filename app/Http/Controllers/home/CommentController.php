<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use DB;
use App\Models\Admin\User;


class CommentController extends Controller
{
    //
    public function index(Request $request,$id)

    {	//dd($id);
       /* $res = DB::table('orders')
            ->Join('user', 'orders.u_id', '=', 'user.id')
            ->Join('orderxiangqing', 'orderxiangqing.o_id', '=', 'orders.id')
            ->Join('goods', 'orderxiangqing.g_id', '=', 'goods.id')

            ->get();
         dd($res); 
            foreach ($res as $k => $v) {
            	
            	$v;
            }*/
     $uid = User::where('username', session('username'))->first();

     $res = DB::table('orderxiangqing')->where('o_id',$id)->value('g_id');
    //dd($res);

      

       // dump($v);

   		 $d=time();
         $c=date('Y-m-d h:i:s',$d);
         $arr["create_at"]=$c;
         $arr["u_id"] =$uid->id;
         $arr['g_id'] =$res;
         $arr['o_id'] = $id;
         $arr['content'] = $request->input('content');
         $arr['appraise'] = $request->input('appraise');
         //dd($arr);
         $data = Comment::create($arr);
         $da = Comment::get();
         foreach ($da as $k => $v) {
         	$goods= DB::table('goods')->where('id',$v->g_id)->first();
         }
   	     //dd($goods);
    	//dump($req);
    	return view('home.comment.index',['da'=>$da,'goods'=>$goods]);
    }
    public function add(Request $request,$id)

    {        //dd($id);
    		$bb = DB::table('orderxiangqing')->where('o_id',$id)->first();
    		$aa = DB::table('goods')
    				->Join('goodspic','goods.id','=','goodspic.gid')
    				->get();
            // dd($bb->g_id);
          	return view('home.comment.add',['id'=>$id,'aa'=>$aa,'bb'=>$bb]);
    }
}
