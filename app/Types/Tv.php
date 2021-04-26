<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Tv extends Model
{
    protected $fillable = [
        'deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
    'tvtype',
    'smarttv',
    'os',
    'screensize',
    'screentexno',
    'screenresolution',
    'screentype',
    'speakercount',
    'speakerpower',
    'senseaudio',
    'screenformation',
    'audioformation',
    'hdmi',
    'optic',
    'usb',
    'lan',
    'wifi',
    'cammodul',
    'bluetooth',
    'tvvideo',
    'tvaudio',
    'tvphoto',
    'vesastandart',
    'dimensionup',
    'dimension',
    'weightup',
    'weight',
    'color',
        'comision'
];
}
