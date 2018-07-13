<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Tjgoods;
use App\Models\Admin\Tjgoodspic;

use App\Models\Admin\Category;

use DB;


class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

         $gname = Tjgoods::orderBy('rgid','asc')
            ->where(function($query) use($request){
                //检测关键字
                $rgname = $request->input('rgname');
                $rprice = $request->input('rprice');
                //如果用户名不为空
                if(!empty($rgname)) {
                    $query->where('rgname','like','%'.$rgname.'%');
                }
                //如果邮箱不为空
                if(!empty($rprice)) {
                    $query->where('rprice','like','%'.$rprice.'%');
                }
            })

            ->paginate($request->input('num', 10));

            return view('admin.tjgoods.index',[
                'title'=>'商品的浏览列表',
                'res'=>$rgname, 
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
        //
        $res = Category::select(DB::raw('*,concat(path,id) as paths'))->
            orderBy('paths')->
            get();
            
        foreach($res as $k => $v){
            //获取path
            // $paths = explode(',',$v->path);
            //$evl = count($paths)-2;

            $rs = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$rs).'|--'.$v->catename;
        }

        return view('admin.tjgoods.add',[
            'title'=>'商品的添加页面',
            'res'=>$res
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

        $res = $request->except('_token','rgpic[]');

        $data = Goods::create($res);

        $rgid = $data->id;

        //商品图片
        if($request->hasFile('rgpic')){

            $gp = $request->file('rgpic');

            $goodspc= [];

            foreach($gp as $k => $v){

                $gc = [];

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                $gc['rgid'] = $rgid;

                $gc['rgpic'] = '/uploads/'.$name.'.'.$suffix;

                // dump($gc);

                $goodspc[] = $gc;

            }
        }

        $tjgoods = Tjgoods::find($rgid);

         //模型   出错
        try{
            $data = $rgoods->gs()->createMany($goodspc);

            if($data){
                return redirect('/admin/tjgoods')->with('success','添加成功');
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

        $cate = Category::select(DB::raw('*,concat(path,id) as paths'))->
            orderBy('paths')->
            get();
            
        foreach($cate as $k => $v){
            //获取path
            // $paths = explode(',',$v->path);
            //$evl = count($paths)-2;

            $rs = substr_count($v->path,',')-1;

            $v->catename = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$rs).'|--'.$v->catename;
        }

        $goodsone = Goods::where('id',$id)->first();

        $goodspic = Goodspic::where('gid',$id)->get();

        return view('admin.tjgoods.edit',[
            'title'=>'商品的修改',
            'goodsone'=>$goodsone,
            'goodspic'=>$goodspic,
            'cate'=>$cate

        ]);
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
        //表单验证

        $res = $request->except('_token','gpic','_method');

        $info = Goods::where('id',$id)->update($res);

        //商品图片
        if($request->hasFile('gpic')){

            $gp = $request->file('gpic');

            $goodspc= [];

            foreach($gp as $k => $v){

                $gc = [];

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                $gc['gid'] = $id;

                $gc['gpic'] = '/uploads/'.$name.'.'.$suffix;

                $goodspc[] = $gc;

            }
        }

        $data = DB::table('goodspic')->insert($goodspc);

        if($data){
            return redirect('/admin/goods')->with('success','修改成功');
        }

       /*  //模型   出错
        try{
            $data = DB::table('goodspic')->where('gid',$id)->update($goodspc);

            if($data){
                return redirect('/admin/goods')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back();

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
        //
        // $goods = Goods::find($id);

        // $goods->delete();

        // $res = $goods->gs()->delete();

        

    
        // foreach ($data as $k => $v) {
           
        //     // dump($v->gimg);
        //     $res = unlink('.'.$v->gimg);
        // }

        

            $goods = Goods::find($id);

            $goods->delete();

            $res = $goods->gs()->delete();
            
            if($goods){
            return redirect('/admin/goods')->with(['success'=>'删除成功']);

        }
    }
}
