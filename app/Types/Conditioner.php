<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Conditioner extends Model
{
    protected $fillable = [
        'deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'comision',
        'amountpowerclass','compressortype','cooling','coolingmode','heating','heatingmode','maxflowrate','roomsize','involumelevel',
        'outvolumelevel','nightmode','wifi','internalblockheight','internalblockwidth','internalblockdepth','externalblockheight','externalblockdepth',
        'internalblockweight','externalblockweight','color'
    ];

}
