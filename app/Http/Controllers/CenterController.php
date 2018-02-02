<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CenterController extends Controller
{
    //个人信息的查看与修改
    public function showInfo(){
       $user=$this->guard()->user();
//        dd($user);
       return view('shop.home.center.info',compact('user'));
//       if ($request->session()->has('id')) {
//            echo 'y';
//        }else{
//            echo 'n';
//
//        }
//        $info = User::where('id',$id)->get();
//        dd($info);
        //return view('shop.home.center.info',['info'=>$info]);
    }
    public function updateInfo(Request $request){
//        $this->validate($request, [
//            'name' => 'required|max:15',
//           'phone' => 'required|min:8|max:11',
//            'age'=>'required|integer',
//            'sex'=>'required',
//            'address'=>'required'
//        ], [
//            'name.required' => '名字不能为空',
//            'phone.required' => '电话不能为空',
//            'age.required' => '年龄不能为空',
//            'sex.required' => '性别不能为空',
//            'address.required' => '地址不能为空',
//            'name.max'=>'字数已超',
//            'phone.min'=>'号码位数有问题',
//            'phone.max'=>'号码位数有问题',
//            'age.integer'=>'请填数字',
//        ]);
//        $this->guard()->user()->update($request->only(['name', 'phone','age', 'sex','address']));
        $info = $request->all();
        if ($info->save()) {
            return back()->with('status','修改成功！');
        } else {
            return redirect()->back();
        }
//        return back()->with('status','修改成功！');
    }

    //订单的查看与修改
    public function showOrders(){
        return view('shop.home.center.orders');
    }
    public function updateOrders(){

    }

    //购物车

    public function showCarts(){
        return view('shop.home.center.carts');
    }
    public function updateCarts(){

    }

    //收货地址
    public function showAddr(){
        return view('shop.home.center.addr');
    }
    public function updateAddr(){

    }

protected function guard(){
    return Auth::guard();
}

}
