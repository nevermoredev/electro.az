<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Kettle extends Model
{
    protected $fillable = [
        'comision','deposit','dimension','weight','color','volume','bodymaterial',
        'power','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];
}
