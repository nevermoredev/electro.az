<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = array('id','product','fio','number','address','created_at','status','commit','price','mount','personbuy','buymethod');
}
