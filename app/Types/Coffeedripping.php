<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Coffeedripping extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','maxpressure','usekofe','twocupontime',
        'steamgiveng','timer','expresso','capucino','watervolume',
        'outvolume','waterlevel','bodymaterial','power','dimension',
        'weight','color'
    ];
}
