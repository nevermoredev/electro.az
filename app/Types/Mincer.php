<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Mincer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmenttype','speedmode','rever',
        'power','antiheating','cablebox','headersbox','rubberleg',
        'bodymaterial','dimension','weight','color'
    ];
}
