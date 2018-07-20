<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CartController extends Controller
{
    //
    public function cart()
    {
        $aa = DB::table('link')->get();
        $res = DB::table('goods')
            ->Join('cart', 'goods.id', '=', 'cart.gid')
            ->get();
        // dd($res);
        $arr = DB::table('goodspic')->get();
        return view('home.cart.cart',['res'=>$res,'aa'=>$aa,'arr'=>$arr]);
    }

    public function ajaxcart(Request $request)
    {
        $id = $request->input('id');
        //构造器删除
        $data = DB::table('cart')->where('id',$id)->delete();

        $count = DB::table('cart')->count();

        echo $count;
    }


     public function sess()
        {
        session('ses') == session('username');
    }
    public function dizhi()
    {
        $aa = DB::table('link')->get();
        $res = DB::table('dizhi')->get();
        return view('home.cart.dizhi',['res'=>$res,'aa'=>$aa]);
    }
    public function order(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('cart')->where('gid',$id)->get();
        foreach ($res as $k => $v) {
            $v;
        }
        if ($v->status == "1") {
            $data = DB::table('cart')->where('gid', $id)->update(['status' => "2"]);
        } else{
            $data = DB::table('cart')->where('gid', $id)->update(['status' => "1"]);
        }
        echo $data;
    }
    public function plu(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('cart')->where('gid',$id)->increment('num');
        echo $data;
        echo $id;
    }
    public function min(Request $request)
    {
        $id = $request->input('id');
       
        $res = DB::table('cart')->where('gid',$id)->get();
        foreach ($res as $k => $v) {
            $v;
        }
        if($v->num > 1){
            $data = DB::table('cart')->where('gid',$id)->decrement('num');
            
        }else if ($v->num < 1) {
             $data = DB::table('cart')->where('gid',$id)->increment('num');
        }else{
           $data = 1;
        }
        echo $data;
        echo $id;
    }
    public function remove(Request $request)
    {
        $id = $request->input('id');
        //构造器删除
        $data = DB::table('dizhi')->where('id',$id)->delete();
        $count = DB::table('dizhi')->count();

        echo $id;
    }
    public function moren(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('dizhi')->get();
        $date = DB::table('dizhi')->where('status', '1')->update(['status' => "2"]);
        $data = DB::table('dizhi')->where('id', $id)->update(['status' => "1"]);
        echo $data;
        echo $id;
    }
    public function queren(Request $request)
    {
         $add = $request->except('_token','_method','profile');
         // dd($add);
        $aa = DB::table('link')->get();
        $res = DB::table('cart')->join('goods', function ($join) {
                 $join->on('cart.gid', '=', 'goods.id')->where('cart.status', '=', '2');
        })
        ->get();
        // dd($res);
        $num = 0;
        $price = 0;
        foreach ($res as $k => $v) {
            $gid[] = $v->gid;
            $num =$num + $v->num;
            $price = $num*$v->price;
        }
        // dd($num);
        session(['gid'=>$gid]);
        session(['num'=>$num]);
        session(['price'=>$price]);
        session(['res'=>$add]);
        $arr = DB::table('goodspic')->get();
        // dd($arr);
        return view('home.cart.queren',['res'=>$res,'arr'=>$arr,'aa'=>$aa]);
    }
    public function jieshu(Request $request)
    {
       
        // dd($res);
        $gid = $request->session()->get('gid');
        $num = $request->session()->get('num');
        $sum = $request->session()->get('price');
        $res = $request->session()->get('res');
        $name = $request->session()->get('username');
        $aa = DB::table('user')->where('username',$name)->first();
        // dd($aa);
        $id = $aa->id;
        // $a = DB::table('orderxiangqing')->where('gid', '=', $gid)->delete();
        // $message = $request->session()->get('message');  
        // dd($num);
        $oid = rand(1000,9999).time();
        // dd($oid);
        $ac = DB::table('orders')->insert(
             ['id' => $oid, 'u_id' => $id,'name'=> $res['name'] ,'address'=> $res['address'] , 'phone'=> $res['phone'] ,'create_at'=> date("Y-m-d"),'sum'=>$sum,'cnt'=>$num]
         );
        // dd($message);
        // dd($ac);
        foreach ($gid as $k => $v) {
            $n = DB::table('cart')->where('gid',$v)->value('num');
            $price = DB::table('goods')->where('id',$v)->value('price');
            // dd($n);
            $od = DB::table('orderxiangqing')->insert(
                    ['o_id'=>$oid,'g_id'=>$v,'cnt'=>$n,'price'=>$price]
                );
        }

        $a = DB::table('cart')->where('gid', '=', $gid)->delete();
        return view('home.cart.jieshu',['title'=>'支付页面','oid'=>$oid,'sum'=>$sum]);
        
    }

}