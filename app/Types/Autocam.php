<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Autocam extends Model
{
    protected $fillable = [
        'deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','camcount','viewingangle','micro',
        'screensize','videorecordingresolution','videoformation',
        'internalmemory','sd','sdmax','autoconnection','dimension',
        'weight','color'
    ];
}
