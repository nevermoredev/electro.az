<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsFilter extends Model
{
    protected $fillable = [
        'id','type','filtername','title'
    ];
}
