<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video');


}
