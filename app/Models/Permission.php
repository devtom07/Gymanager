<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permissions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','title'];

    public function role(){
        {
            return $this->belongsToMany(Role::class, 'role_permissions', 'pms_id', 'role_id');
        }
    }
}
