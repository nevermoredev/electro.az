<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Microclimat extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];

}
