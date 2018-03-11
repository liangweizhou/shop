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

//Route::get('register','RigisterController');
//Route::get('test','TestController@test1');

Route::get('updatetest','TestController@query2');

Auth::routes();

Route::get('/Home', 'HomeController@index')->name('Home');
Route::group(['middleware'=>['web']],function (){
    Route::any('session1','TestController@session1');
    Route::any('session2','TestController@session2');
});
Route::any('response','TestController@response');


Route::group(['middleware'=>['active']],function (){
    Route::any('actice0','TestController@active0');
    Route::any('active1','TestController@active1');
});

Route::group(['middleware'=>['web']],function (){
    Route::get('student/index', 'StudentController@index');
    Route::get('student/create', 'StudentController@create');
    Route::post('student/create', 'StudentController@store');
    Route::any('student/save',  'StudentController@save');
    Route::any('student/update/{id}',  'StudentController@update');
    Route::any('student/detail/{id}',  'StudentController@detail');
    Route::any('student/delete/{id}', 'StudentController@delete');
});




//shop项目
Route::group(['middleware'=>['web']],function (){
    //主页
    Route::get('/','HomeController@index');
    //个人中心
    Route::get('/center','HomeController@center');
    //
});
Route::group(['prefix'=>'center'],function (){
    //个人信息与修改
    Route::get('/info','CenterController@showInfo');
   Route::put('/updateinfo','CenterController@updateInfo');
    Route::get('/orders','CenterController@showOrders');
    Route::post('/orders','CenterController@updateOrders');
    Route::get('/carts','CenterController@showCarts');
    Route::post('/carts','CenterController@updateCarts');
    Route::get('/addr','CenterController@showAddr');
    Route::post('/addr','CenterController@storeAddr');
    //
});

Route::get('hello',function (){
    return view('shop.Home.index');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('/index' ,'Admin\HomeController@show');

    Route::get('/login' ,'Admin\Auth\LoginController@show');
    Route::post('/login' ,'Admin\Auth\LoginController@login');
    Route::post('/logout', 'Admin\AdminsController@logout');
    Route::get('/admins','Admin\AdminsController@show');
    Route::post('/admins','Admin\AdminsController@store');
    Route::get('/users','Admin\UsersController@show');
    Route::post('/users','Admin\UsersController@store');
    Route::get('users/addr','Admin\UsersController@showAddr');
    Route::post('users/addr','Admin\UsersController@storeAddr');
    Route::get('users/evaluation','Admin\UsersController@showEval');
    Route::post('users/evaluation','Admin\UsersController@storeEval');

    Route::get('/products','Admin\ProductsController@show');
    Route::post('/products','Admin\ProductsController@store');
    Route::get('/products/details','Admin\ProductsController@detail');
    Route::post('/products/details','Admin\ProductsController@storeDetail');
    Route::get('/products/images','Admin\ProductsController@image');
    Route::post('/products/images','Admin\ProductsController@storeImage');

    Route::get('/cate','Admin\CateController@showCate');
    Route::post('/cate','Admin\CateController@store');
    Route::get('/props','Admin\PropsController@show');
    Route::post('/props','Admin\PropsController@storeProps');

    Route::get('/orders','Admin\OrdersController@showOrders');
    Route::post('/orders','Admin\OrdersController@store');
}
);

Route::get('test1',function (){
    return view('test1');
});

Route::get('test','XxxController@show');