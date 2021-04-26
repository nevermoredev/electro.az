<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Fryer extends Model
{
    protected $fillable = [
        'comision','deposit','volume','timer','power','bodymaterial','color',
        'id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];
}
