<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Icecamera extends Model
{
   protected $fillable = [
       'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'seperatorcount','powersaverclass','kompressortype','kompressorcount','icecamvolume','icecamdefrost','flashlight','freezerchamber','opendoorsignaldimension','weight','color'
    ];
}
