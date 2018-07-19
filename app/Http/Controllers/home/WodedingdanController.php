<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class WodedingdanController extends Controller
{
    //
    public function index(Request $request)
    {
    	$res = DB::table('orders')
            ->Join('orderxiangqing', 'orders.id', '=', 'orderxiangqing.o_id')
            ->Join('goodspic', 'orderxiangqing.g_id', '=', 'goodspic.gid')
            ->Join('goods', 'goods.id', '=', 'goodspic.gid')
            ->get();
        // dd($res);
        $name = $request->session()->get('username');
        // dd($name);
        $aa = DB::table('user')->where('username',$name)->first();
        // dd($aa);
        $id = $aa->id;
        // dd($id);
        
        

    	
    	return view('home.info.wodedingdan',['res'=>$res,'id'=>$id]);
    }
}

