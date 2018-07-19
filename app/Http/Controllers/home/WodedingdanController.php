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
        

        

    	
    	return view('home.info.wodedingdan',['res'=>$res]);
    }
}

