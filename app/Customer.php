<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'code','name','sex','phone','contract_code','identity_card','pt_level_id','address','email','note'
        ];
}
