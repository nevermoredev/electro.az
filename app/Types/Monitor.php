<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','screenresolutuion','screensize',
        'sreentype'
    ];
}
