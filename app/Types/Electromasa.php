<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Electromasa extends Model
{
    protected $fillable = [

        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','power','diametr','heatingmode','heatingtime','heatingtemp','covermaterial','weight','autooff','dimension','color','antiheating'

    ];
}
