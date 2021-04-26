<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Refrigerator extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'refrigeratortype','powersaveclass','kompressortype','kompressorcount','chamberfrostvolume	',
        'chamberdefrost','coolcameraseperatorcount','iceshelfcount','inflashlighticecam','inflashlight',
        'chambericevolume','chambericedefrost','frostshelfcount','icecamlocation','opendoorsignal',
        'icemaker','dimension','weight','color','madein'
    ];
}
