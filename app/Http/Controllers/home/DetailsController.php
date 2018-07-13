<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DetailsController extends Controller
{
    public function index()
    {
    	$aa = DB::table('link')->get();
    	return view('home.index.details',['aa'=>$aa]);
    }
}
