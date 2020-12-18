<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "position";
    protected $primaryKey = 'id';
    protected $guarded =[];


     public function staff(){
         return $this->belongsTo(Staff::class,'id','position');
     }
}
