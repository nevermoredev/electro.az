<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Hairclipper extends Model
{
    protected $fillable = [

        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','color','dimension','weight','batary','autonomtime','powerfulltime','estimatedrange','balancingwhenshearing','autosharpening'

    ];
}
