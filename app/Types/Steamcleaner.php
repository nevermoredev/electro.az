<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Steamcleaner extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','boylervolume','power','headers',
        'cabellength','dimension','weight','color'
    ];
}
