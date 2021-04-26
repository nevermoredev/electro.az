<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Modem extends Model
{
    protected $fillable = [
        'comision','deposit','modemtype','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];
}
