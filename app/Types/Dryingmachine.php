<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Dryingmachine extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','power','separatorcount','managmentmode',
        'bodymaterial','weight','color'
    ];
}
