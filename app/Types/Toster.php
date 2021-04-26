<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Toster extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmentmode','roastingmodecount','webforloaf',
        'autooff','power','powermaterial','antiheatingbody','underbox',
        'dimension','weight','color'
    ];
}
