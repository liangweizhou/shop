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
Route::get('test','TestController@query');
Route::get('updatetest','TestController@query2');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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
    Route::any('student/create', 'StudentController@create');
    Route::any('student/save',  'StudentController@save');
    Route::any('student/update/{id}',  'StudentController@update');
    Route::any('student/detail/{id}',  'StudentController@detail');
    Route::any('student/delete/{id}', 'StudentController@delete');
});
Route::get('blade',function (){
    return view('student.index');
});

Route::get('hello',function (){
    return view('hello');
});

//shop项目
Route::group(['middleware'=>['web']],function (){
    Route::any('/','ProductController@show');
});