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
	//用户
	Route::resource('admin/user','admin\UserController');

	Route::any('admin/ajaxuser','admin\UserController@ajaxuser');

	
	Route::any('admin/users','admin\UserController@touxiang');
	//类别
	Route::resource('admin/category','admin\CategoryController');
	//商品
	Route::resource('admin/goods','admin\GoodsController');
	
	//特价商品
	Route::resource('admin/tjgoods','admin\TjgoodsController');
	//退出
	Route::any('admin/logout','admin\LoginController@logout');
	//评论
	//Route::resource('admin/comment','admin\CommentController');
	//公告
	Route::resource('admin/gonggao','admin\GonggaoController');
	Route::any('admin/gonggao/update/{id}','admin\GonggaoController@update');
	//友情链接
	Route::resource('admin/link','admin\LinkController');
	Route::any('admin/link/update/{id}','admin\LinkController@update');
	Route::any('admin/logout','admin\LoginController@logout');
	//轮播
	Route::resource('admin/lunbo','admin\LunboController');

});


//Route::any('home/shouye/index','home\ShouyeController@index');



//前台的注册
Route::any('home/register','home\RegisterController@regist');
Route::any('home/doregist','home\RegisterController@doregist');
Route::any('home/jihuo','home\RegisterController@jihuo');

Route::any('home/login','home\LoginController@login');

Route::any('home/dologin','home\LoginController@dologin');

//前台路由组
Route::group([],function(){


	Route::any('/home','home\HomeController@index');
	//商品列表
    Route::any('home/list','home\ListController@index');
    //商品详情
    Route::any('home/details','home\DetailsController@index');
    //购物车
    Route::any('/home/cart','home\CartController@cart');
	Route::any('/home/ajaxcart','home\CartController@ajaxcart');
	

	//个人信息
	Route::get('/info/info','home\InfoController@index');
	Route::get('/info/gerenxinxi','home\GerenxinxiController@index');


	//购物车
	
	//Route::any('/home/cart','home\CartController@cart');
	//Route::any('/home/ajaxcart','home\CartController@ajaxcart');



});
// 评价管理
Route::get('/admin/comment/index','admin\CommentController@index');  // 显示页面

Route::get('/home/comment/create','admin\CommentController@create');  /// 添加评论页面
Route::post('/home/comment/insert','admin\CommentController@insert');  /// 添加评论操作
Route::post('/home/comment/destroy/{id}','admin\CommentController@destroy'); 




