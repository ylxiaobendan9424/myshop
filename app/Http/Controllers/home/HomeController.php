<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
    	$arr = DB::table('gonggao')->get();
    	$aa = DB::table('link')->get();
    	$lb = DB::table('goodspic')->get();
    	$guanggao = DB::table('guanggao')->get();
    	$lunbo = DB::table('lunbo')->get();
        $cart = DB::table('cart')->get();
    	// dd($res);

    	return view('home.home',['arr'=>$arr,'aa'=>$aa,'lb'=>$lb,'guanggao'=>$guanggao,'lunbo'=>$lunbo,'cart'=>$cart]);
    }
    public function show()
    {
        
    }
    
}
