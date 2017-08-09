<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Models extends Model
{
    protected $table='users';
    public function seleusers(){
    	return DB::table('users')->select('*')->get();
    }
	public function insert(){
		$bool=DB::insert("insert into users(UsersName,UsersSex,UsersAge,UsersPwd) values('小黄黄','女',15,9999)");
		return $bool;
	}
	public function like(){
		$bool=DB::table('users')->get();
		return $bool;
	}
}
