<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use App\Models\Admin\Comment;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        $comment = DB::table('orderxiangqing')
            ->Join('orders', 'order.o_id', '=', 'orderxiangqing.o_id')
            ->Join('goods', 'goods.id', '=', 'orderxiangqing.g_id')
            ->Join('goodspic', 'goods.id', '=', 'goodspic.gid')
            ->get();
        dd($comment);


        return view('/admin/comment/index',['title'=>'浏览评论','comment'=>$comment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        //
        session(['uname'=>'admins']);
        
       return view('home.comment.create',[
            'title'=>'评论',
            

            ]);
    }

    // 添加到数据库
    public function insert(Request $request)
    {

        /* $req = $request->all();
         $req = $request->except(['_token']);
         
         $res=DB::table('goodspic')->where('gid',$id)->get();
         foreach ($res as $k => $v) {
            # code.
            $arr = $v ;
         }
         //dd($arr);
          
         $data = DB::table('orders')->where('oid',$id)->get();
        // dd($data);
         foreach ($data as $k => $v) {
            # code..
            $v;
         }

         $req["o_id"]= $v->o_id;
         $req["u_id"]= $v->u_id;
        //$data = $req->except(['_token']);
          $data = Comment::create($req);
          $qqq = DB::table('orderdetails')
            ->Join('goods', 'orderdetails.gid', '=', 'goods.id')
            ->Join('orders', 'orderdetails.oid', '=', 'orders.oid')
            ->get();
           
            foreach ($qqq as $k => $v) {
                # code...
                $v;

            };

           //dd($v);
          // $data = DB::table('ord')->where('oid',$id)->get()
         
        //模型   出错
      return view('home.comment.commentlist',['data'=>$data,'arr'=>$arr,'v'=>$v]);*/

      return view('home.comment.insert');
   }

    
}
