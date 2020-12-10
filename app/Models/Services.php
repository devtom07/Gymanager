<?php

namespace App;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    public function staff(){
        return $this->belongsTo(Staff::class,'id_coach','id');
    }
    public function customer(){
        return $this->belongsTo(Customer::class,'id_customer','id');

    }
}
