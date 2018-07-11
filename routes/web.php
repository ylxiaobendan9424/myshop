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
	//友情链接
	Route::resource('admin/link','admin\LinkController');
	Route::any('admin/link/update/{id}','admin\LinkController@update');
	Route::any('admin/logout','admin\LoginController@logout');
	//轮播
	Route::resource('admin/lunbo','admin\LunboController');
});



//前台路由组
Route::group([],function(){

  	Route::any('/home','home\HomeController@index');

	Route::any('/home/cart','home\CartController@cart');
	Route::any('/home/ajaxcart','home\CartController@ajaxcart');

});