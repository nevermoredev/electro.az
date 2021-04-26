<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Electricscales extends Model
{
    protected $fillable = [

        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','display','batary','powerfullled','sizeacuracy','maxweight','weightformation','autooff','color'

    ];
}
