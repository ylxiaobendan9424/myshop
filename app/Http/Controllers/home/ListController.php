<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ListController extends Controller
{
    //
    public function index(Request $request)
    {	
    	// echo 1232;die;
    	$aa = DB::table('link')->get();

    	return view('home.list',['aa'=>$aa]);
    }

    
}
