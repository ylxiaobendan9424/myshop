<?php
namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Goods;
use App\Models\Admin\Goodspic;
use App\Models\Admin\Category;
use App\Models\Admin\User;
use DB;

class DetailsController extends Controller
{
    public function details($id)
    {
        $data = Goods::with('gs')->where('id',$id)->get();
        $aa = DB::table('link')->get();
        return view('home.index.details',['data'=>$data,'aa'=>$aa]);

    }
    public function gouwu(Request $request){

        // dd($request->input());
        $res['gid']=$request->input('goodsid');
        $res['num']=$request->input('quantity');
        $res['color']=$request->input('color');
        $res['size']=$request->input('size');
        // $res['status']='1';

        // dd(session('username'));
        $user = User::where('username', session('username'))->first();
        // dd($user);
        // dd($uid);
        $res['uid']=$user['id'];
        // dd($res);
        DB::table('cart')->insert($res);

        return redirect('/home/cart');

    }
}
