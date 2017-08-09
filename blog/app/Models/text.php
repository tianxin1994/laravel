<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class text extends Model
{
    public function insert(){
    	$bool=DB::insert("insert into login()");
    }
}
