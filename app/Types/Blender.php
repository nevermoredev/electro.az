<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Blender extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','headers','cookwarecapacity','measuringсup',
        'minishredder','shredder','wreathforstirring','disctosplit','icesplitting',
        'lubrication','managmentmode','speedmode','speededucation','powerconsumption',
        'bodymaterial','cupmaterial','weight','color'
    ];
}
