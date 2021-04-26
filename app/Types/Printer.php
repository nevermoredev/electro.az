<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'printtype','printtexno',
        'printdpi','printcolor','printformation',
        'printspeed','kartcount','fax','scanner',
        'copypast','wifi','lan','dimension','weight','color'
    ];
}
