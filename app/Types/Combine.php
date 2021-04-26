<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Combine extends Model
{
    protected $fillable = [
        'comision','deposit','managmenttype','speedmode','headerscount',
        'spliter','wreathforstirring','doughhook','wringer','cupmaterial',
        'cupvolume','power','antiheating','bodymaterial','headersbox',
        'cabelbox','color','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status'
    ];
}
