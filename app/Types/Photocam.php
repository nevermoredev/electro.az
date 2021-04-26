<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Photocam extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'iso','maxresolution',
        'matrixtype','matrixsize','hdmi',
        'weight','dimension','color',
        'bluetooth','sd','batary',
        'batarytype','interface','internalmicro',
        'screensize','antiblind','foxuscount',
        'manualfoxus','autofoxus','minimaldirectrecording',
        'diafragma','stabilizator','foxusdirection',
        'objectivmodel','swapobjectiv','objectivcount',
        'cputype','videorecording','videorecordingresolution',
        'imgconvert','diafragmaprioritet','deklansor',
        'speedrecording','sportrecording','portrait',
        'macrorecording',
    ];
}
