<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Gonggao;

class GonggaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Gonggao::where('title','like','%'.$request->input('search').'%')->
                paginate($request->input('num',10));
        //dd($res['num']);
        $arr = ['num'=>$request->input('num'),'search'=>$request->input('search')];
        
        return view('admin.gonggao.index',[
            'title'=>'公告的列表页',  
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
        return view('admin.gonggao.add',[
            'title'=>'公告的列表页'
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
            'title' => 'required',
            'url' => 'required|regex:/^\S{1,50}$/',          
        ],[
            'title.required'=>'公告标题名不能为空',
            //'title.regex'=>'公告标题名格式不正确',
            'url.required'=>'公告链接地址不能为空',
            'url.regex'=>'公告链接地址格式不正确'

        ]);
         $res = $request->except(['_token','profile','repass']);
         // dd($res);
          try{
            $data = Gonggao::create($res);
            // dd($data);


            if($data){
                return redirect('/admin/gonggao')->with('success','添加成功');
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
        $res = Gonggao::where('id',$id)->first();
        return view('admin.gonggao.edit',['title'=>'公告的修改页面','res'=>$res]);
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
            //'title' => 'required',
            'url' => 'required|regex:/^\S{1,50}$/',          
        ],[
            'title.required'=>'公告标题不能为空',
            //'title.regex'=>'公告标题格式不正确',
            'url.required'=>'链接地址不能为空',
            'url.regex'=>'链接地址格式不正确'

        ]);
        $res = $request->except('_token','_method','profile');    
        try{
             $data = Gonggao::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/gonggao')->with('success','修改成功');
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
}
