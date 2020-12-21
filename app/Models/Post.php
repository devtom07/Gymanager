<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = "posts";
    protected $primaryKey = 'id';
    protected $guarded =[];

    public function cate_posts(){
        return $this->hasOne(Cate_posts::class,'id','id_posts_cate');
    }
}
