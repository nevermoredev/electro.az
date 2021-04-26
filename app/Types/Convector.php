<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Convector extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'power','antiheating','tempregulator','rommsize','dimension','weight','color','managmenttype'
    ];

}
