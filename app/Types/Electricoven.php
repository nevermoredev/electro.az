<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Electricoven extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmentmode','dooropen','timer',
        'involume','incover','flashlight','programmode','cookingmode',
        'autocooking','dimension','weight','color'
    ];
}
