<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ShouhuoController extends Controller
{
    //
     public function index(Request $request)
    {
    	
    	$res = DB::table('dizhi')
            ->Join('user', 'user.id', '=', 'dizhi.uid')
            ->get();
        // dd($res);
        $name = $request->session()->get('username');
        // dd($name);
        $aa = DB::table('user')->where('username',$name)->first();
        $id = $aa->id;
        // dd($id);


        // dd($id);
    	return view('home.info.shouhuo',['res'=>$res,'id'=>$id]);
    }
}
