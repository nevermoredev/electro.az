<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Dryer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'powersave','cargocompartment','maxcargo','programmodecount',
        'soundlevel','selfclearingkondinsator','antiheating','kidlock',
        'dimension','weight','color','madein'
    ];
}
