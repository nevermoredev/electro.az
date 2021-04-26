<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Managment\TypeMenu;

class Search extends Controller
{
   public function search()
   {
   	 if (request()->isMethod('post')) {
            

        $words = request('search_field');

        $types = TypeMenu::all();

        $title = "Axtarılan məssullar";


        $allcollection =collect();

        foreach ($types as $type) {

            $product_type = ucfirst($type->type);

            $class = app("App\Types\\$product_type");

            $keywords = explode(" ", $words);

            $collection = $class

                ->where(function($query) use ($keywords) { 

                foreach ($keywords as $key =>$word) {

                    $query->orwhere('name','like',"%$word%");

                }
                })->get();


            $allcollection = $allcollection->merge($collection);

        }

        $data = request('data');

        $collection = $allcollection;

        $count = $collection->count();

       return view('client.search',compact('collection','title','count'));

    }
   }
}
