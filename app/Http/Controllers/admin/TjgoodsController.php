<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Tjgoods;
use DB;

class TjgoodsController extends Controller
{
    //
     public function create($id)
    {
        $res = DB::table('goods')->where('id',$id)->get();
        return view('admin.tjgoods.add',[
            'title'=>'商品的添加页面',
            'res'=>$res
        ]);
    }
    public function store(Request $request,$id)
    {
    	// dd($id);
    	$price =$request->except('_token','gname');
    	// dd($price);
    	try{
	    	$res = DB::table('tjgoods')->insert(['gid'=>$id,'gprice'=>$price['price']]);
	    	if ($res) {
	    		  return redirect('/admin/tjgoods')->with('success','添加成功');
	    	}
    	}catch(\Exception $e){

            return back();

        }
    	//dd($res);

    }
    public function index()
    {
        //
        $res = DB::table('tjgoods')
        ->join('goods','goods.id','=','tjgoods.gid')
        ->get();
        // dd($res);
        return view('admin.tjgoods.index',['res'=>$res]);
            
    }
    public function edit($id)
    {
    	// dd($id);
    	$res = DB::table('tjgoods')->where('gid',$id)->first();
    	// dd($res);
    	$gname = DB::table('goods')->where('id',$id)->value('gname');
    	// dd($gname);
        return view('admin.tjgoods.edit',['res'=>$res,'gname'=>$gname]);
    }
    public function update(Request $request,$id)
    {
    	$res = $request->except('_token');
    	// dd($res);
    	$gid = DB::table('goods')->where('gname',$res['gname'])->value('id');
    	// dd($gid);
    		try{
	    	$res = DB::table('tjgoods')->where('id',$id)->update(['gid'=>$id,'gprice'=>$res['price']]);
	    	if ($res) {
	    		  return redirect('/admin/tjgoods')->with('success','添加成功');
	    	}
    	}catch(\Exception $e){

            return back();

        }
    }

     public function destroy($id)
    {
        // dd($id);
        // $tjgoods = Tjgoods::delete($id);
        $tjgoods = DB::table('tjgoods')->where('gid',$id)->delete();
        // dd($id);

        // $tjgoods->delete();
       /* try{

             $tjgoods = DB::table('tjgoods')->where('id',$id)->delete();
             // dd($tjgoods);
            if($tjgoods){
                return redirect('/admin/tjgoods')->with(['success'=>'删除成功']);
            }
        }catch(\Exception $e){

            return back();

        }*/
       
        
        if($tjgoods){
            return redirect('/admin/tjgoods')->with(['success'=>'删除成功']);

        }
    }

}
