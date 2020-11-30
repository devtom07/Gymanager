<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'code','name','sex','phone','contract_code','identity_card','level','address','email','note'
        ];
}
