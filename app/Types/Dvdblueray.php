<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Dvdblueray extends Model
{
    protected $fillable = [ 'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','weight','hdmi','dts','dolbydigital','formations','externaldevices','bluetooth','audioconnection','microoutput','dimension','color','usb'];
}
