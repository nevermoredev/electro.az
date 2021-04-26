<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managment\TypeAtr;
use App\Managment\TypeMenu;

class SeedShController extends Controller
{
    public function run()
    {
        $text="Ok!";

        $typemenu = TypeMenu::all();

        $typeatr = new TypeAtr;

        foreach ($typemenu as $type) {


            $atrtype=$type->type;

            $atr='deposit';

            $atrname= 'İlkin ödəniş';

            $atrarray = ['type'=>$atrtype,'atr'=>$atr,'name'=>$atrname];

            $typeatr->fill($atrarray);

            // $typeatr->save();


            dump($typeatr);


        }

        return $text;

    }
}
