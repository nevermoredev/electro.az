<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Aspirator extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','filtertype','managmenttype','speedmode','lighttype','lampcount','enginecount','maxusing','usingpower','maxsoundlevel','installation','dimension','weight','color'
    ];
}
