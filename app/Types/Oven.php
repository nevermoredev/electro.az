<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Oven extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmenttype','doorout','timer',
        'starttime','involume','ventdiametr','inkameramaterial','flashlight',
        'programmode','cookingprogram','autocooking','microwavepower','powermode',
        'power','dimension','weight','color'
    ];
}
