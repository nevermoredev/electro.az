<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Dishwasher extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'powersaveclass','waterusingvolume','complexperson','basket','display','managmenttype','programmodecount','soundlevel','antileak','kidlock','dimension','weight','color'
    ];
}
