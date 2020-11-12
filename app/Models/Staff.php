<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    protected $fillable = ['code','name','phone','email','address','status','contract','wage','title','user_id'];
}
