<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate_posts extends Model
{
    protected $table = "cate_posts";
    protected $primaryKey = 'id';
    protected $guarded =[];

    public function posts(){
        return $this->belongsTo(Posts::class);
    }
}
