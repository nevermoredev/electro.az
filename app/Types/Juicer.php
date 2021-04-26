<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Juicer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','dindiametr','fullsizeobject','cupforuse',
        'directshipment','nectarbox','nectarboxout','bodymaterial','power',
        'dimension','weight','color'
    ];
}
