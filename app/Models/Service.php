<?php

namespace App\Models;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $primaryKey = 'id';
    protected $guarded =[];
   public function staff(){
       return $this->belongsTo(Staff::class,'id_coach','id');
   }
   public function customer(){
       return $this->belongsTo(Customer::class,'id_customer','id');
   }
}