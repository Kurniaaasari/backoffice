<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    // protected $fillable = ['name','address','no_phone','email','password'];


    // public function address()
    // {
    //     // return $this->hasMany(Address::class);
    // }
}
