<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CollectionController extends Controller
{
    //
    public function index()
    {
    	return view('home.info.collection');
    }
}
