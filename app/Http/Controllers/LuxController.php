<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuxController extends Controller
{
    public function main()
    {   
        $title = "LuxHome";

        $data = [

            'title'=>$title

        ];

    	return view('client.lux',$data);
    }

    public function about()
    {   
        $title = "Hakımızda";

        $data = [

            'title'=>$title

        ];

    	return view('client.aboutLux',$data);
    }
    public function filial()
    {   
        $title = "Filialar";

        $data = [

            'title'=>$title

        ];

    	return view('client.contactslux',$data);
    }
}
