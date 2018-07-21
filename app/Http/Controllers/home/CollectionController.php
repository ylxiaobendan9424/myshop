<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin\User;
use App\Models\Admin\Collection;
class CollectionController extends Controller
{
    //
    public function index()
    { 
        $data=User::where('username',session('username'))->select('id')->first();
        $uid=$data->id;
        $data=Collection::where('user_id',$uid)->with('goodspic.goods')->get();
    	// $res = DB::table('collection')
     //    ->where('user_id',$uid)
     //    ->Join('goods', 'goods.id', '=', 'collection.goods_id')
    	// ->Join('goodspic', 'goodspic.gid', '=', 'collection.goods_id')
    	// ->get();
        // dd($res); 
        // dump($data);
        // foreach($res as $k=>$v){
        //    dd($v);
        // }
        // die;
    	return view('home.info.collection',['res'=>$data]);
    }
    public function create(Request $request)
    { 
            $data=User::where('username',session('username'))->select('id')->first();
            $uid=$data->id;
            $res['goods_id']=$request->input('goods_id');
            $res['user_id']=$uid;
           
            try{
                Collection::create($res);
                return 0;
            }catch(\Exception $e){
               return 1;
            }
    }
    public function del(Request $request){
           try{
                Collection::where('id',$request->input('id'))->delete();
                return 0;
            }catch(\Exception $e){
                return 1;
            }
    }
}
