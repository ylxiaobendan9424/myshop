<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GerenxinxiController extends Controller
{
    //
    public function index(Request $request)
    {
    	$res = DB::table('user')
            ->Join('user_detail', 'user.id', '=', 'user_detail.u_id')
            ->Join('dizhi', 'user.id', '=', 'dizhi.uid')
            ->get();
    	return view('home.info.gerenxinxi',['res'=>$res]);
    }
    

}
