<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Notebag extends Model
{
    protected $fillable = [
        'comision','deposit','color','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','material'
    ];
}
