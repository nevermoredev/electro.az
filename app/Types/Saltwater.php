<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Saltwater extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','pressure','waterusing','power',
        'bodymaterial','hoselenght','holder','wheel','antiheating',
        'filter','headers','dimension','weight','color'
    ];
}
