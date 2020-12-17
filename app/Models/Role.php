<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasPermissions;

class Role extends Model
{
    use HasPermissions;
/**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'roles';
protected $fillable = [
  'name','guard_name'
];
public function permission(){
    return $this->belongsToMany(Permission::class,'role_has_permissions','role_id','permission_id');
}
}
