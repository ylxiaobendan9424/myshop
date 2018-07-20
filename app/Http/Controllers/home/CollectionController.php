<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CollectionController extends Controller
{
    //
    public function index()
    {
    	$res = DB::table('collection')
    	->Join('goods', 'goods.id', '=', 'collection.goods_id')
    	->get();
    	return view('home.info.collection',['res'=>$res]);
    }
    public function create()
    {

    }
}
