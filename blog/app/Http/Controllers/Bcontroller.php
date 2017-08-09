<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Models as seuser;
//use Illuminate\Support\Facades\View;
class Bcontroller extends Controller{
	public function show($age="asdaasdasdsasf"){
		echo $age;
		echo "<br>";
		echo 123;
	}
	public function store(Request $request){
		$name=$request->input('name');
	}
	public function update(Request $request, $id){
		echo $id."<br>";
		echo $request->path()."<br>";
		echo $request->url()."<br>";
		echo $request->fullUrl()."<br>";
		var_dump($request->isMethod('get'));
	}
	public function input(Request $request){
		//$input=$request->all();
		//var_dump($input);
		//$name=$request->input();
		//var_dump($name);
		//$name=$request->input('name');
		//var_dump($name);
		$name=$request->input('name','Sally');
		var_dump($name);
	}
	public function view(){
		return view('text1');
	}
	public function tx(){
		echo 'tx';
	}
	public function home(){
		echo "home";
	}
	public function moren(){
		echo "默认";
	}
	public function zsgx(){
		//查询数据
		//$data = DB::select('select * from users');
		//添加数据
		//$data = DB::insert("insert into users(UsersName,UsersSex,UsersAge,UsersPwd) values('大黄','男',55,123)");
		//修改数据
		//$data=DB::update("update users set UsersName='小黄' where UsersId=29");
		//删除数据
		//$data=DB::delete("delete from users where UsersId=29");
		//$data = DB::table('users')->pluck('UsersName','UsersAge');
		//foreach ($data as $key=>$title) {
   		//	echo $title;
   		//	echo $key;
		//}	
		//var_dump($data);
		//$data=DB::table('users')->get(); //打印所有数据
		//$data=DB::table('users')->where('UsersId',23)->first(); //打印一条数据
		//打印一行中单个字段的值
		//$data=DB::table('users')->where('UsersId',23)->value('UsersName');
		//需要操作上千条数据的话可以考虑用chunk方法
		//返回值为对象
		//$data=DB::table('users')->orderBy('UsersId')->chunk(2,function($users){
		//	foreach($users as $user){
		//		echo $user->UsersName;
		//	}
		//});
		//打印数据总数
		//$data=DB::table('users')->count();
		//打印对应字段的最大值
		//$data=DB::table('users')->max('UsersId');
		//$data=DB::table('users')->select('UsersName');
		//$data=DB::table('users')->where('UsersName','张山')->get();
		//$data=DB::table('users')->where('UsersName','小红')->first();
		//$data=DB::table('users')->where('UsersName','小红')->value('UsersName');
		//打印UsersAge大于20的数据
		//$data=DB::table('users')->where('UsersAge','>',20)->get();
		
		$data=DB::table('users')->where('UsersAge','<>',23)->get();
		//$data=DB::table('users')->where('UsersName','like','张%')->get();
		//$data=DB::table('users')->where('UsersName','like','%小%')->get();
		echo "<pre>";
		var_dump($data);
		
	}
	public function model(){
		$obj=new seuser();
		$data=$obj->seleusers();
//		foreach ($data as $key => $value) {
//            echo "<pre>";
//            var_dump($value);
//            echo $value->UsersName;
//       }
		return view('text1')->with('name',$data);
	}
	public function charu(){
		$obj=new seuser();
		$data1=$obj->insert();
		echo $data1;  //成功打印出来1  失败打印出来0
	}
	public function xianshi(){
		//return view('like');
		return view('index1');
	}
	public function db1(){
		$obj=new seuser();
		$data=$obj->like();
		//echo $data;
		return view('db1',['data'=>$data]);
	}
	public function shuchu(){
		return view('insert1');
	}
	public function inserting(Request $request){
//		$data=$request->all();
//		var_dump($data);
		$name= $_POST['name'];
		$sex= $_POST['sex'];
		$age= $_POST['age'];
		$pwd= $_POST['pwd'];
		DB::insert("insert into users(UsersName,UsersSex,UsersAge,UsersPwd) values('$name','$sex',$age,$pwd)");
	}
}
?>