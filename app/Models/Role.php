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
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name'];
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'role_permissions', 'pms_id', 'role_id');
    }
    public function user()
    {
        return $this->belongsToMany(User::class, 'role_users', 'user_id', 'role_id');
    }

}
