<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Mixer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmenttype','speedmode','impulsmode',
        'power','wreathforstirring','doughhook','bodymaterial','dimension',
        'weight','color'
    ];
}
