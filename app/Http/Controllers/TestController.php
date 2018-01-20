<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TrimStrings;
use App\User;

use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function show(){
        //echo '11';
        //$users = \App\User::all();
        //foreach ($users as $user){
          // return view('test',[$user =>$user]);
            //echo $user->name;

    // }
       // foreach ($users as $user){
       // $name=$users->name;
      //     print_r($name) ;

        }
     // $a=\App\User::where('name','zlw')->
      //    orderBy('email','desc')->with('email');
       // print_r($a);
      //  print_r($users);
   // }

    public function showname(){
        $name = 'hh';
        $arr=['xx','cc'];
        $products= \DB::table('products')->get();
        return view('test',['name'=>$name,
            'array'=>$arr,
            'products'=>$products
            ]);

    }
    public function store(Request $request){
       // $user = new User;

}


    public function session1(Request $request){
        //http request中的session的使用
      //  $request->session()->put('key1','vlue1');
       // return view('test');
        //session辅助函数的方式
      //  session()->put('key2','value2');

        //通过session类
        //Session::put('key3','value3');

        //数组的形式存储数据，把数据放到session数组中 push()
        Session::push('student','xx');
        Session::push('student','yy');


    }
    public function session2(Request $request){
        //http request中的session的使用
       // echo $request->session()->get('key1');
       // return view('test');
       //session辅助函数的方式
        //echo session()->get('key2');
       //通过session类

    // $arr = Session::get('student','default');
     //var_dump($arr);
        //取出数据后删除 pull()函数，Session::all()取出全部元素
        //$arr = Session::pull('student','default');
       // if (Session::has('key1')){
      //      $res =Session::all();
      //      dd($res);
     //   }else{
     //       echo 'error!';
     //   }
        //清空指定数据
        //Session::forget('xxx');
        //清空session
        //Session::flash('xxx');
        //暂存数据
        //Session::flash('key-flash','val-fash');
    }
    public function response(){
          $data=[
              'errorCode' => 0,
              'errMsg'=>'success',
              'data'=>'zlw'
          ];
          //响应json，以json的形式输出
          return response()->json($data);

          //重定向 redirect('session2'); 可以return，可以with('xx','xxxx')数据
          //
       // return redirect()->action('XxxController@xxx')->with('message','我是快闪数据');
         //通过route的别名跳转 ‘as’
       // return redirect(back);
    }

    public function activity0(){
        return '没开始呢！';
    }
    public function activity1(){
        return '开始了';
    }

    public function test1(){
        //return 'ok';
        //$student = DB::select('select * from students' );
        //var_dump($student);
       // $a = DB::insert('insert into students(name,age,sex) values(?,?,?)' , ['hahaah',18,1]);
       // DB::insert('insert into students()');
        //var_dump($a);
       // $b = DB::update('update students set age=? where name=?',[20,'zlw']);
      //  var_dump($b);
       // DB::delete('delete from students where id=?',[11]);
       // $c=  DB::select('select name from students where id=?',[1] );
       // var_dump($c);

}
    public function query(){
       // DB::table('students')->insert([
     //       ['name'=>'王刚','age'=>55,'sex'=>1],
       //     ['name'=>'李四','age'=>55,'sex'=>1],
      //      ['name'=>'王五','age'=>55,'sex'=>1]]
      //  );
    }
    public function query2(){
       // DB::table('students')->where('id',1)->update(['age',18]);

        //自增1
        DB::table('students')->where('id',1)->increment('age',3);
        //  DB::table('students')->decrement('age',3);
    }
}