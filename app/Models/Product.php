<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = 'id';
    protected $guarded =[];
    public function category(){
        return $this->belongsTo(Category::class,'cate_id','id');
    }
}
