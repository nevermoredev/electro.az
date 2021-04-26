<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Sonyplaystation extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','cputype',
        'cpucount','gputype','gpuram','intenalmemory','dvd','blueray','wifi','bluetooth','hdmi','usb','lan','dimension','weight','color'
    ];
}
