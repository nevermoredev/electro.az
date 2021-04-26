<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Steamer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','separatorcount','cupvolume','cupmaterial',
        'heatingsave','sterilization','timer','unwateroff','bodymaterial',
        'dimension','weight','color'
    ];
}
