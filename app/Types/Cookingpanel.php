<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Cookingpanel extends Model
{
   protected $fillable = [
       'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status',
        'conforcount','electricconfor','gasconforcount','incationconfor','autofire','material','conforgascontrol','dimension','weight','color'
    ];
}
