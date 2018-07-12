<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Admin\Goods;
use DB;
class ListController extends Controller
{
    //
    public function index(Request $request)
    {	
    	// echo 1232;die;
    	$aa = DB::table('link')->get();
    	$data = Goods::with('gs')->get();

    	return view('home.index.list',['aa'=>$aa,'data'=>$data]);
    }

    
}
