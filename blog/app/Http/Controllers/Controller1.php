<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
class Controller1 extends Controller{
	public function show(Request $request){
		return view('zhuye');
	}
	public function login(){
		return view('login');
	}
	public function registers(){
		return view('registers');
	}
	public function sxregisters(Request $request){
		//echo $request->all();
		$this->validate($request, [
    		'name' => 'required',
    		'phonenum' => 'required',
    		'pwd' => 'required',
    		'pwd2' => 'required',
		],[
			'name.required'=>'姓名不能为空',
			'phonenum.required'=>'电话不能为空',
			'pwd.required'=>'密码不能为空',
			'pwd2.required'=>'密码不能为空',
		]);
		//文件上传
		$path=$request->file('picture');
		$dir=$path->store('pictures');  //文件地址
		$destinationPath='pictures';  //文件夹名称
		$bool=$path->move($destinationPath,$dir);
		$data=$request->only(['name','phonenum','pwd']);
		$data['picture']=$dir;
		$bool=DB::table('login')->insert($data);
		if($bool){
			return view('login',['su' => 1]);
		}
	}
	public function indexx(Request $request){
		$data1=$request->only('name','pwd');
		$name=$request->input('name');
		$pwd=$request->input('pwd');
		$page=$request->input('page');
		$num=DB::table('login')->where(['name'=>$name,'pwd'=>$pwd])->first();
		if($num){
			return redirect()->action('Controller1@amd');
		}
		else{
			return view('login',['er'=>'密码错误']);
		}
	}
	public function amd(Request $request){
		$data=DB::table('login')->paginate(6);
		$page=$request->input('page');
		return view('indexx',['data'=>$data,'page'=>$page]);
	}
	public function update($id){
		//echo $id;
		$data=DB::table('login')->where(['id'=>$id])->first();
		//var_dump($data);
		return view('update',['data'=>$data]);
	}
	public function update1(Request $request){
		$data=$request->only(['name','phonenum']);
		$id=$request->input('id');
		//echo $id;
		$bool=DB::table('login')->where(['id'=>$id])->update($data);
		if($bool){
			//echo 23;
			//return redirect()->route('indexx');
			//页面重定向
			return redirect()->action('Controller1@amd');
		}
	}
	public function delete($id,$page){
		DB::table('login')->where(['id'=>$id])->delete();
		//return view('indexx');
		return redirect()->action('Controller1@amd');
	}
	public function info($id){
		//echo $id;
		$data=DB::table('login')->where(['id'=>$id])->first();
		//var_dump($data);
		return view('user',['data'=>$data]);
	}
}
?>