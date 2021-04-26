<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Breadmaker extends Model
{
    protected $fillable = [
        'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','managmenttype','display','formcover',
        'cookingform','outform','programmode','breatprogram','speedheatingmode',
        'heatingsave','startime','unwatercooking','doughwreath','cookingcolor',
        'cookingsetweight','cookingmaxweight','power','antiheating','kidsave',
        'bodymaterial','watchingwindow','dimension','weight','color'
    ];
}
