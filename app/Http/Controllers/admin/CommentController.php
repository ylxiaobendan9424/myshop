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
    public function index(Request $request)
    {

        // $res = DB::table('comment')->get();
        // dd($res);
        $res = Comment::where('goods_id','1'.$request->input('search').'%')->paginate($request->input('num',10));
        //dd($res['num']);
        $arr = ['num'=>$request->input('num'),'search'=>$request->input('search')];

        return view('admin.comment.index',[
                'title'=>'评论的列表页面',
                'res'=>$res,
                'request'=>$request
                
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
       return view('admin.comment.add',[
            'title'=>'添加评论',

            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证

        // dump($request->all());
        $this->validate($request,[
            'goods_id'=>'required',
            ],[

            'goods_id.required'=>'商品id不能为空'
            //'goods_id.regex'=>'商品id格式不正确',
            ]);
        $res = $request->except(['_token','profile','repass']);
         // dd($res);
          try{
            $data = Comment::create($res);
            // dd($data);


            if($data){
                return redirect('/admin/comment')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back();

        }

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
    }
}
