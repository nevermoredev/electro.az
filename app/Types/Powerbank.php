<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Powerbank extends Model
{
    protected $fillable = ['comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','dimension','weight','batary','connectionvolt','connection','powerled'];
}
