<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeachingSchedule extends Model
{
    protected $table = "teachingSchedules";
    protected $fillable = ['id_hymnal','date','id_customer','id_pt'];

    public function customer(){
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
    public function pt(){
        return $this->belongsTo(Staff::class,'id_pt','id');
    }
    public function hymnal(){
        return $this->belongsTo(Hymnal::class,'id_hymnal','id');
    }
}
