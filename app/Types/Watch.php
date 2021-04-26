<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
     protected $fillable = [ 'comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','network','simcount','simsize','screensize','screenresolution','screentype','memory','cputype','cpucores','os','uncableble','wifi','bluetooth','nfc','navigation','bodysaver','replaceable','notification','bodymaterial','bracermaterial','bodycolor','bracercolor','dimension','weight'];
}
