<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Washingmachine extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'washingmachinetype','powersaveclass','waterusingvolume','enginetype','cargocompartment','maxcargo','washclass','dryingclass','rotationspeed',
        'washingsoundlevel','dryingsounglevel','programmodecount','disbalancecontrol','antileak','kidlock','dimension','weight','color','madein'
    ];
}
