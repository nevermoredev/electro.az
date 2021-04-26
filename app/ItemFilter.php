<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemFilter extends Model
{
    protected $fillable = [
        'id','type','name'
    ];
}
