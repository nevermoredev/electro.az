<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Audiosystem extends Model
{
    protected $fillable = [ 'comision','deposit','id','img','price','type',
    'name','brand','category','tags','waranty','status',
    'kredit','percentkredit','video','weight',
    'karaoke','chanelcount','hdmi','fmturner','display',
    'formations','externaldevices','bluetooth','audioconnection',
    'microoutput','rcaoutput','rds','usb','audiopower',
    'dimension'];
}
