<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Descphones extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','screensize','screentype','batary','timings','autoresponse','numbercoming','spiker','keybordled','contacts','radio','acceptondesc','dimensions','weight','radius','color'
    ];
}
