<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    protected $primaryKey = 'id';
    protected $guarded =[];


    public function user(){
        return $this->hasMany(User::class,'staff_id','id');
    }
}
