<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Electricrazor extends Model
{
    protected $fillable = [

        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','razortype','sessionpoweredtime','powerled','waterclean','conturrepeat','headcount','antiwatercover','trimmer','razormode',
        'powerfulltime','autonomtime','batary','weight','color'

    ];
}
