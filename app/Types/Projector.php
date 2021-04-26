<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Projector extends Model
{
    protected $fillable = ['comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','lightpower','contrast','hdmi','formation','maxresolution','dimension'];
}
