<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Externalmemor extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','color','material',
        'weight','dimension','specification','memory',
        'interface','memoryspeed'
    ];
}
