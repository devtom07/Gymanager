<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Revenue extends Model
{
    protected $table = "revenues";
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function product(){
            return $this->belongsTo(Product::class,'id_product','id');
    }
}