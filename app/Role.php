<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
/**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'roles';
public function permission(){
    return $this->belongsToMany(Permission::class,'role_has_permissions','permission_id','role_id');
}
}
