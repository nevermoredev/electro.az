<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Hairstraightener extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','heatingtime','heatingtemp','covermaterial','power','heatingmode','autooff','color','antiheating'
    ];
}
