<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\Services;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'code','name','sex','phone','contract_code','identity_card','level','address','email','note'
        ];

    public function services(){
      return $this->hasMany(Services::class,'id_customer','id');
    }
    public function pt(){
        return $this->belongsToMany(Staff::class,'services','id_customer','id_coach');
    }
    // public function customer_account(){
    //     return $this->hasOne(CustomerAccount::class, 'id_customer', 'id');
    // }
}

