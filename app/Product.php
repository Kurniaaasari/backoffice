<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $hidden = [
        'created_at', 'updated_at', 'category_id'
    ];
    
    
}
