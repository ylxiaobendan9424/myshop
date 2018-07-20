<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function create(Request $request,$id)
    {
    	return view('home.comment.create');
    }
    public function insert(Request $request,$id)
    {
    	
    }
}
