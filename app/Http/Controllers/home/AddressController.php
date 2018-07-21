<?php
namespace App\Http\Controllers\home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Address;
use DB;
use App\Models\Admin\User;
use App\Models\Admin\User_detail;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ss = User::where('username',session('username'))->first();
        $id = $ss -> id;   
        $address = DB::table('dizhi')->where('uid',$id)->get();
        return view('home.address.index',['address'=>$address ]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('home.address.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ss = User::where('username',session('username'))->first();
        $id = $ss -> id;
        // dd($id);
        $res = $request->except(['_token','uid']);
        $res['uid']=$id;
        $add = $res['address1'].$res['address2'].$res['address3'];
        $res['address'] = $add;
        unset($res['address1']);
        unset($res['address2']);
        unset($res['address3']);
        // dd($res);
        $data = Address::create($res);

        return redirect('/home/address');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = Address::where('id',$id)->first();
        return view('home.address.edit',['res'=>$res]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = $request->except('_token','_method','profile');
        $add = $res['s_province'].$res['s_city'].$res['s_county'];
        $res['address'] = $add;
        unset($res['s_province']);
        unset($res['s_county']);
        unset($res['s_city']);
        // dd($res);
      
         // dd($data);
        try{

             $data = Address::where('id',$id)->update($res);
            
            // dump($date);
            if($data){
                return redirect('/home/address');
            }
        }catch(\Exception $e){

            return back();

        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($id);
        $res = Address::where('id',$id)->delete();
        if($res){
            return redirect('/home/address')->with('success','删除成功');
        }

    }
}

