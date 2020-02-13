<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    protected $fillable = [
        'name', 'email', 'password', 'id_roles'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function role() {
    return $this->belongsTo(Role::class);
}

public function hasPermission($permission) {
    return $this->role->permissions()->where('name', $permission)->first() ?: false;
}
}
