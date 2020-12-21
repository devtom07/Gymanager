<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $table = "revenues";
    protected $primaryKey = 'id';
    protected $guarded = [];
}