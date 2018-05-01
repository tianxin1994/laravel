<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class Acontroller extends Controller
{
    public function show($id="asd"){
        return $id;
    }
    public function show1($name){
    	return $name;
    }
    public function index(){
    	return view('storeSecret');
    }
    public function storeSecret(Request $request){
    	$name=$request->input('name');
    	$pwd=$request->input('pwd');
    	//echo $name."<br>".$pwd;
    	echo $pwd;
    	echo "<br>";
    	$pwdpwd1=Crypt::encryptString($pwd);
    	$pwdpwd2=Crypt::decryptString($pwdpwd1);
    	echo $pwdpwd1;
    	echo "<br>";
    	echo $pwdpwd2;
	echo "<br>";
    }

}


