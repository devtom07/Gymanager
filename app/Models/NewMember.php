<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewMember extends Model
{
    //
    protected $table = 'new_members';

    public function service(){
    	return $this->hasOne(Service::class, 'id');
    }
}
