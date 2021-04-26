<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Depilator extends Model
{
    protected $guarded = [
        'comision','deposit','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','color','id','dimension','weight',
        'batary','autonomtime','powerfulltime','depiliationmode','speedmode','pincount'
    ];
}
