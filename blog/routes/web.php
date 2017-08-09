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
Route::get('/', function () {
    return "hello word！";
});
Route::get('aaa', function () {
    return "aaa";
});
Route::get('bbb', function () {
    return "bbb";
});
/*定义必选参数路由*/
Route::get('bbb/{id}', function ($id) {
    return $id;
});
/*定义可选参数路由*/
Route::get('ccc/{id?}', function ($id='789') {
    return $id;
});
/*定义多个路由*/
Route::get('ddd/{id}/eee/{name}', function ($id,$name) {
    return $id."----".$name;
});
/*正则约束路由*/
Route::get('fff/{name}',function($name){
	return $name;
})->where('name','[A-Za-z]+');
/*数字约束*/
Route::get('ggg/{id}',function($id){
	return $id;
})->where('id','[0-9]+');
/*定义两个路由  正则约束*/
Route::get('hhh/{id}/iii/{name}',function($id,$name){
	return $id."=====".$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+']);
Route::get('controller','Bbbb@aaa');
Route::get('controller1','Bbbb@bbb');
Route::get('controller2','Bbbb@ccc');
Route::get('route1','Acontroller@show');
Route::get('route2/{id}','Acontroller@show1');
Route::get('route3','Bcontroller@show');
Route::get('route4','Bcontroller@store');
Route::get('route5/{id}','Bcontroller@update');
Route::get('route6','Bcontroller@input');
Route::get('route7','Bcontroller@view');
//Route::get('route8','Bcontroller@tx');
//Route::get('home','Bcontroller@home');
Route::get('hhh1','Bcontroller@tx');
Route::get('hhh2','Bcontroller@home');

Route::group(['middleware' => 'CheckAge'], function () {
    Route::get('hhh','Bcontroller@moren');
});
Route::get('zsgx','Bcontroller@zsgx');
Route::get('view', function () {
    return view('text1', ['name' => 'James']);
});
Route::get('model','Bcontroller@model');
Route::get('model1','Bcontroller@charu');
Route::get('like','Bcontroller@xianshi');
Route::get('db','Bcontroller@db1');
Route::get('shuchu','Bcontroller@shuchu');
Route::post('inserting','Bcontroller@inserting');
Route::get('show','Controller1@show');
Route::get('login','Controller1@login');
Route::get('registers','Controller1@registers');
Route::any('sxregisters','Controller1@sxregisters');
Route::any('indexx','Controller1@indexx');
Route::any('update/{id?}','Controller1@update');
Route::any('update1','Controller1@update1');
Route::any('delete/{id?}/{page?}','Controller1@delete');
Route::any('info/{id?}','Controller1@info');
Route::any('amd','Controller1@amd');
Route::any('storeSecret','Acontroller@index');
Route::any('secret','Acontroller@storeSecret');
