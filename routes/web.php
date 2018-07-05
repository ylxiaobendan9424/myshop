<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

	 Route::any('/admin/login','admin\LoginController@login');

	 Route::any('/admin/dologin','admin\LoginController@dologin');

	 Route::any('admin/captcha','admin\LoginController@captcha');
//后台路由组
Route::group(['middleware'=>'login'],function(){

	//后台首页
	Route::any('admin/index','admin\IndexController@index');

	Route::resource('admin/user','admin\UserController');

	Route::any('admin/ajaxuser','admin\UserController@ajaxuser');

	Route::resource('admin/category','admin\categoryController');

	Route::any('admin/logout','admin\LoginController@logout');

	Route::resource('admin/comment','admin\CommentController');

	Route::resource('admin/gonggao','admin\GonggaoController');
	Route::any('admin/gonggao/update/{id}','admin\GonggaoController@update');
});

//Route::get('admin/comment','admin\CommentController@index');
//Route::get('admin/comment','admin\CommentController@create');



//前台路由组
Route::group([],function(){




});