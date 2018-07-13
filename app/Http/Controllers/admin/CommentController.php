<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Comment;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $comment = Comment::get();
        $uname = session('uname');
        // dd($comment[0]);

        return view('/admin/Comment/index',['title'=>'浏览评论','comment'=>$comment,'uname'=>$uname]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        session(['uname'=>'admins']);
       return view('home.comment.create',[
            'title'=>'添加评论',

            ]);
    }

    // 添加到数据库
    public function insert(Request $request)
    {
        $res = $request -> except('_token');
            
        $user = Users::where('uname',session('uname'))->with('user_detail')->first();
        if(!$user){
            return redirect('/home/login')->with('error','您的账号存在异常请重新登录');
        }
        // dd($user);
        // dd($user -> user_detail['user_id']);
        $res['create_at'] = date('Y-m-d H:i:s',time());
        // dd($res);
        $res['user_id'] = $user->user_detail['user_id'];
        $res['g_id'] = 20;

        $comment = Comment::create($res);
        if($comment){
            return back()->with('success','评论成功');
        }

        return back()->with('error','评论失败');
    }
}
