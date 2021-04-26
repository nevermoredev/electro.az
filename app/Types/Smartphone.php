<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','network','simcount','simtype','screensize','screentype','screenresolution','ram','memory','cpu','cores','cores','cpumghz','os','ocamera','jcamera','diafragma','zoom','autofocus','ledflash','videorecording','frontcamera','batary','uncablecharge','cablecharge','wifi','bluetooth','nfc','navigation','security','bioscaner','micinput','material','dimensions','weight','color'
    ];
}
