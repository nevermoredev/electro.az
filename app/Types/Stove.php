<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Stove extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'powersaveclass','managmenttype','timer','display','volume','convection','defrost','telescoppick','flashlight','kidlock','dimension','weight','color'
    ];
}
