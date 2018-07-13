<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Config;
use Hash;
use App\Models\Admin\Link;


class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //
        // $a = $request->input('num');
        $res = Link::where('name','like','%'.$request->input('search').'%')->
                paginate($request->input('num',10));
        // dd($res['num']);
        $arr = ['num'=>$request->input('num'),'search'=>$request->input('search')];
        
        return view('admin.link.index',[
            'title'=>'友情链接的列表页',  
            'res'=>$res,
            'arr'=>$arr
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
        return view('admin.link.add',[
            'title'=>'友情链接的列表页'
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
       //
        $this->validate($request, [

            'name' => 'required',
            'url' => 'required|regex:/^\S{1,350}$/',          

        ],[
            'name.required'=>'链接名不能为空',
            'name.regex'=>'链接名格式不正确',
            'url.required'=>'链接地址不能为空',
            'url.regex'=>'链接地址格式不正确'

        ]);
         $res = $request->except(['_token','profile','repass']);
         // dd($res);
          try{
            $data = Link::create($res);
            // dd($data);


            if($data){
                return redirect('/admin/link')->with('success','添加成功');
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
        $res = Link::where('id',$id)->first();
        return view('admin.link.edit',['title'=>'友情链接的修改页面','res'=>$res]);
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

            'name' => 'required',
            'url' => 'required|regex:/^\S{1,350}$/',          

        ],[
            'name.required'=>'链接名不能为空',
            //'name.regex'=>'链接名格式不正确',
            'url.required'=>'链接地址不能为空',
            'url.regex'=>'链接地址格式不正确'

        ]);
        $res = $request->except('_token','_method','profile');    
        try{
             $data = Link::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/link')->with('success','修改成功');
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
        $res = Link::where('id',$id)->delete();
        if($res){
            return redirect('/admin/link')->with('success','删除成功');
        
        }
    }
}
