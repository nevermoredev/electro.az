<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','os','cpu',
        'cpucores','cpumghz','ram','physicmemory',
        'memorytype','screensize','screenresolution','screentype',
        'vga','vram','hdmi','usb','cardreader','audioconnection','lan','wifi',
        'bluetooth','webcam','internalmicro','speakercount','optic','ledkeyboard',
        'batary','dimension','weight','color'
    ];
}
