<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Headset extends Model
{
    protected $fillable = ['comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','specification','connection','diaposon','powerdb','color','micro'];
}
