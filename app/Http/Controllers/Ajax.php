<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Managment\TypeMenu;

class Ajax extends Controller
{
     public function ajax(){


     	if (request()->isMethod('post')) {


                
                $words = request('search_field');


     		$types = TypeMenu::all();

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

        $data = $allcollection->take(10);

        $collection = $allcollection;

        $count = $collection->count();


            
            $request_fild = request('search_field');


           return response()->json($data); 

        }

        
     }

}
