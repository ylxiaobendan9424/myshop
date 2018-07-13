<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CartController extends Controller
{
    //
    public function cart()
    {

        $aa = DB::table('link')->get();
    	$res = DB::table('cart')->get();

    	return view('home.cart.cart',['res'=>$res,'aa'=>$aa]);

    }

    public function ajaxcart(Request $request)
    {
    	$id = $request->input('id');
    	//构造器删除
    	$data = DB::table('cart')->where('id',$id)->delete();

    	$count = DB::table('cart')->count();

    	echo $count;
	}


	 public function sess()
        {
        session('ses') == session('username');
    }
}