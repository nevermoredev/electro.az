<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Tablet extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','network','simcount','simtype','screensize','screentype','screenresolution','ram','memory','cputype','cpucores','memorycard','cpumghz','os','ocamera','jcamera','diafragma','zoom','videorecording','batary','uncablable','cable','wifi','bluetooth','nfc','navigation','bodysaver','bioscaner','micinput','material','dimension','weight','color','autofokus'
    ];
}
