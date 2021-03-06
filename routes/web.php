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
Route::group([''],function(){

	//后台首页
	Route::any('admin/index','admin\IndexController@index');
	//管理员
	Route::resource('/admin/admin','admin\AdminController');
	//用户
	Route::resource('admin/user','admin\UserController');

	Route::any('admin/ajaxuser','admin\UserController@ajaxuser');
	//类别
	Route::resource('admin/category','admin\CategoryController');
	//商品
	Route::resource('admin/goods','admin\GoodsController');
	
	//特价商品
	Route::any('admin/tjgoods','admin\TjgoodsController@index');
	Route::any('admin/tjgoods/{id}','admin\TjgoodsController@create');
	Route::any('admin/tjgoods/store/{id}','admin\TjgoodsController@store');
	Route::any('admin/tjgoods/edit/{id}','admin\TjgoodsController@edit');
	Route::any('admin/tjgoods/update/{id}','admin\TjgoodsController@update');
	Route::any('admin/tjgoods/delete/{id}','admin\TjgoodsController@destroy');
	//退出
	Route::any('admin/logout','admin\LoginController@logout');
	//评论
	// Route::resource('admin/comment','admin\CommentController');
	
	//公告
	Route::resource('admin/gonggao','admin\GonggaoController');
	Route::any('admin/gonggao/update/{id}','admin\GonggaoController@update');
	//友情链接
	Route::resource('admin/link','admin\LinkController');
	Route::any('admin/link/update/{id}','admin\LinkController@update');
	Route::any('admin/logout','admin\LoginController@logout');
	//轮播
	Route::resource('admin/lunbo','admin\LunboController');
	//广告
	Route::resource('admin/guanggao','admin\GuanggaoController');
	//订单
	Route::resource('admin/dingdan','admin\DingdanController');
	Route::any('admin/dingdan/xiangqing/{id}','admin\DingdanController@xiangqing');
});

//Route::get('admin/comment','admin\CommentController@index');
//Route::get('admin/comment','admin\CommentController@create');


//Route::any('home/shouye/index','home\ShouyeController@index');



//前台的注册
Route::any('home/register','home\RegisterController@regist');
Route::any('home/doregist','home\RegisterController@doregist');
Route::any('home/jihuo','home\RegisterController@jihuo');

Route::any('home/login','home\LoginController@login');

Route::any('home/dologin','home\LoginController@dologin');
Route::any('home/logout','home\LoginController@logout');

//前台路由组
Route::group([],function(){

	Route::any('/home','home\HomeController@index');
	//商品列表
     Route::any('home/list/{id}','home\ListController@list');
    //商品详情
   Route::any('home/details/{id}','home\DetailsController@details');
    //加入购物车
    Route::any('/home/gouwu','home\DetailsController@gouwu');
    //购物车
    Route::any('/home/cart/{id?}','home\CartController@cart');
	Route::any('/home/ajaxcart','home\CartController@ajaxcart');
	Route::any('/home/dizhi','home\CartController@dizhi');
	Route::any('/home/order','home\CartController@order');
	Route::any('/home/plu','home\CartController@plu');
	Route::any('/home/min','home\CartController@min');
	Route::any('/home/remove','home\CartController@remove');
	Route::any('/home/moren','home\CartController@moren');
	Route::any('/home/queren','home\CartController@queren');
	Route::any('/home/jieshu','home\CartController@jieshu');

	//个人信息
	Route::get('/info/info','home\InfoController@index');
	Route::get('/info/gerenxinxi','home\GerenxinxiController@index');
	Route::post('/info/update','home\GerenxinxiController@update');
	Route::get('/info/shouhuo','home\ShouhuoController@index');
	Route::get('/info/wodedingdan','home\WodedingdanController@index');
	Route::get('/info/collection','home\CollectionController@index');
	Route::get('/info/collection/create','home\CollectionController@create');
	Route::get('/info/collection/del','home\CollectionController@del');
	
	/*Route::get('/info/editgerenxinxi/{id}','home\GerenxinxiController@edit');*/


	//地址
	Route::resource('/home/address','home\AddressController');
	
	//评论
	Route::any('/home/comment/add/{id}','home\CommentController@add');
	Route::any('/home/comment/index/{id}','home\CommentController@index');


});

// 评价管理
//Route::get('/admin/comment/index','admin\CommentController@index');  // 显示页面


//Route::any('/home/comment/create','admin\CommentController@create');  /// 添加评论页面
//Route::any('/home/comment/insert','admin\CommentController@insert');  /// 添加评论操作