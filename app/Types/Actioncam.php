<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Actioncam extends Model
{
    protected $fillable = [
        'comision','id','img','price','deposit','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];
}
