<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Hometheater extends Model
{
    protected $fillable = ['comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','speakercount','uncablableconnection','hdmi','audioconnection','usb','dimension','weight'];
}
