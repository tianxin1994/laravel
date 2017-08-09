<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bbbb extends Controller
{
    public function aaa($id='123'){
    	echo $id;
    }
    public function bbb(Request $request){
    	$data=$request->all(); //获取全部值
    	$name=$request->input('name');
    	dd($data);
    	dd($name);
    }
    public function ccc(Request $request){
    	$data1=$request->path();
    	var_dump($data1);
    	echo "<hr>";
    	$data2=$request->url();
    	var_dump($data2);
    	echo "<hr>";
    	$data3=$request->fullUrl();
    	var_dump($data3);
    	$bool=$request->isMethod('get');
    	echo "<hr>";
    	var_dump($bool);
    }
}
