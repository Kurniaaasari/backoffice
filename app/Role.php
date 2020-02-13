<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
<<<<<<< HEAD
    //
    protected $fillable = [
        'name'
    ];
=======
   protected $fillable = [
        'name_roles'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
>>>>>>> master
}
