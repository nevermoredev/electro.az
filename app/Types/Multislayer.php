<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Multislayer extends Model
{
    protected $fillable = [

        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','power','heatingtime','heatingtemp','weight','autooff','dimension','color','antiheating'

    ];
}
