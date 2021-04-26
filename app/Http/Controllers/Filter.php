<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsFilter;

class Filter extends Controller
{
    public function filter($type)
    {

        dd(request()->data);

    	if (request()->isMethod('post')) {

    		 if (request('minprice') === null || request('minprice') > request('maxprice')) {

                $minprice =$all->min('price');

            }else{
                $minprice = request()->minprice;
            }

             if (request('maxprice') === null || request('minprice') > request('maxprice') or request('maxprice') === 0) {

                $maxprice = $all->max('price');
            }else{
                $maxprice = request()->maxprice;
            }

            $filters_list = ProductsFilter::where('type',$product_type)->get()->toArray();

            $filters_list_count = count($filters_list);

            $filters_list_for_request = [];


            $title = TypeMenu::where('type',$type)->first();


            $filters_array = ProductsFilter::where('type',$product_type)->get();

            $title = $title->title;

            $filtername_post = request()->except('_token');




            //Получай массив с фильтрами из запроса

           for ($filter_list_value=0; $filter_list_value<=$filters_list_count - 1; $filter_list_value++){       

                $temp = $filters_list[$filter_list_value]['filtername'] ;

                if (request()->has($temp)) {

                   array_push($filters_list_for_request,$temp);
                }
                
            }

            //Количество фильтров в запросе

            $filters_list_for_request_count = count($filters_list_for_request);

            $request = request()->toArray();

            $collection = $collection

                ->where(function($query) use ($request,$filters_list_for_request_count,$filters_list_for_request,$minprice,$maxprice) { 

                for ($filter_type_value=0; $filter_type_value <= $filters_list_for_request_count - 1; $filter_type_value++) { 

                    $filter_name_list = $request[$filters_list_for_request[$filter_type_value]];

                    $filter_name_list_count = is_array($filter_name_list) ? count($filter_name_list) : 0;


                    $query->whereIn($filters_list_for_request[$filter_type_value],$filter_name_list);
                }                
            
        })->whereBetween('price',[$minprice,$maxprice])->paginate(20); 
    		
    		return response()->json($collection);

    	}
    }
}
