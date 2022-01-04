<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class register extends Model
{
    use HasFactory;
    public function insertregister($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectdata($table,$uname,$password)
    {
        return DB::table($table)->where('uname',$uname)->where('password',$password)->first();
    }
    public function name($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function selectreg($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function updates($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
   
}
