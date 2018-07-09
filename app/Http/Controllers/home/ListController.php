<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    //
    public function index(Request $request)
    {	
    	// echo 1232;die;
    	return view('home.list');
    }
}
