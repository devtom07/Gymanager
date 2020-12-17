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
    public function hymnal(){
        return $this->hasOne(Hymnal::class, 'id', 'id_catap');
    }
}
=======

    public function hymnal(){
        return $this->hasOne(Hymnal::class, 'id', 'id_catap');
    }
}
>>>>>>> 6384bb357b7ad29d653c5497975eea14bfdd40f5
