<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Guanggao;
use Config;
use Hash;
use App\Http\Requests\FormRequest;

class GuanggaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //echo '1234';
         $guanggao = Guanggao::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('search');
                //如果用户名不为空
                if(!empty($gname)) {
                    $query->where('username','like','%'.$gname.'%');
                }
            })
            ->paginate($request->input('num', 10));

            return view('admin.guanggao.index',[
                'title'=>'广告的列表页面',
                'res'=>$guanggao, 
                'request'=> $request
            ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // echo "1234";
        return view('admin.guanggao.add',[

            'title'=>'广告的添加页面'
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
        $this->validate($request, [
            'gname' => 'required|regex:/^\w{1,12}$/',
            'gphone'=>'required|regex:/^1[3456789]\d{9}$/',            
        ],[
            'gname.required'=>'用户名不能为空',
            'gname.regex'=>'用户名格式不正确',
            'gphone.required'=>'手机号不能为空',
            'gphone.regex'=>'手机号格式不正确',
            'gtext.required'=>'不正确'

        ]);
         $res = $request->except(['_token']);
         if($request->hasFile('gimage')){

            //设置名字
            $name = str_random(10).time();

            //获取后缀
            $suffix = $request->file('gimage')->getClientOriginalExtension();

            //移动
            $request->file('gimage')->move('./uploads/',$name.'.'.$suffix);
        }
        //存数据表
        $res['gimage'] = Config::get('app.path').$name.'.'.$suffix;
         //dd($res);
          try{
            $data = Guanggao::create($res);
           // dd($data);

             if($data){
                return redirect('/admin/guanggao')->with('success','添加成功');
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
        $res = Guanggao::find($id);

        //dump($res);
        return view('admin.guanggao.edit',['title'=>'用户名的修改页面','res'=>$res]);
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
        
         $this->validate($request, [
            'gname' => 'required|regex:/^\w{1,12}$/',
            'gphone'=>'required|regex:/^1[3456789]\d{9}$/',            
        ],[
            'gname.required'=>'用户名不能为空',
            'gname.regex'=>'用户名格式不正确',
            'gphone.required'=>'手机号不能为空',
            'gphone.regex'=>'手机号格式不正确',
            'gtext.required'=>'不正确'

        ]);
         $res = $request->except(['_token','_method','gimage']);
         if($request->hasFile('gimage')){

            //设置名字
            $name = str_random(10).time();

            //获取后缀
            $suffix = $request->file('gimage')->getClientOriginalExtension();

            //移动
            $request->file('gimage')->move('./uploads/',$name.'.'.$suffix);
        }
        //存数据表
        $res['gimage'] = Config::get('app.path').$name.'.'.$suffix;
        dd($res);
         /*try{
            $data = Guanggao::where('id',$id)->update($res);

            if($data){
                return redirect('/admin/guanggao')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error');

        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $foo = Guanggao::find($id);

        $urls = $foo->profile;
        //第一种
        $res = Guanggao::where('id',$id)->delete();
        //第二种
        // $res = User::destroy($id);

        if($res){

            return redirect('/admin/guanggao')->with('success','删除成功');
        }


    }

}
