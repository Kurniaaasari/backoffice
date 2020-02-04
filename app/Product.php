<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $hidden = [
        'created_at', 'updated_at', 'category_id'
    ];
    protected $dates = ['deleted_at'];
    
}
