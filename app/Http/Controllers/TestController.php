<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managment\TypeAtr;
use App\Managment\TypeMenu;
use Illuminate\Database\Eloquent\Model;
use DB;

class TestController extends Controller
{
    public function test(Request $request)
    {

        $data = [

        ];


        return view('test',$data);
    }
}
