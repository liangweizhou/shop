<?php
 namespace App\Http\Controllers\Admin\Auth;

 use App\Http\Controllers\Controller;
 use App\Http\Requests\StoreAdminPost;
 use Illuminate\Session\Store;
 use Illuminate\Support\Facades\Auth;

 class LoginController extends Controller {
     public function show(){
         return view('shop.admin.login');
     }

     public function login(StoreAdminPost $request){
         $fields = $request->only(['email','password']);
//         $this->authenticated($request);
         if($this->guard()->attempt($fields,true)){
             return redirect('');
         }
         return back()->withInput()->withErrors(['email' => '账号或者密码错误']);
     }
//     public function authenticated($request)
//     {
//         $admin = $this->guard()->user();
//
//         $request->setTrustedProxies(['192.168.10.10']);
//         $admin->last_ip = $request->getClientIp();
//         $admin->save();
//     }

     public function logout(Request $request)
     {
         $this->guard()->logout();

         return redirect()->route('admin.login');
     }

     public function guard($name = 'admin')
     {
         return Auth::guard($name);
     }
 }