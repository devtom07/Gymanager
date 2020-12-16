<?php

namespace App\Models;
use App\Models\Hymnal;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'id';
    protected $guarded =[];
<<<<<<< HEAD
}
=======
    public function hymnal(){
        return $this->hasOne(Hymnal::class, 'id', 'id_catap');
    }
}
>>>>>>> 91113bf1cc7d73d6bea5122ddf9a8d3287c8e054
