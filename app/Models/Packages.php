<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $table = "packages";
    protected $primaryKey = 'id';
    protected $guarded =[];
}