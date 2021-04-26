<?php

namespace App\Http\Controllers;

use App\KreditPercent;
use App\ProductsFilter;
use Illuminate\Http\Request;
use App\Managment\TypeMenu;
use App\Types\Cable;
use Illuminate\Database\Eloquent\Model;
use App\Managment\TypeAtr;
use App\Map;
use App\Carousel;
use DB;
class ClientController extends Controller
{
    public function main()
    {
        $title = "Electrolux - elektron mallar mağazası";

        $gadjets = TypeMenu::where('category','gadjet')->get();
        $beauty = TypeMenu::where('category','beauty')->get();
        $tv = TypeMenu::where('category','tv')->get();
        $computer = TypeMenu::where('category','computer')->get();
        $photo = TypeMenu::where('category','photo')->get();
        $smalldomestic = TypeMenu::where('category','smalldomestic')->get();
        $domestic = TypeMenu::where('category','domestic')->get();
        $game = TypeMenu::where('category','game')->get();
        $pot = TypeMenu::where('category','pot')->get();
        $clima = TypeMenu::where('category','clima')->get();
        $domestic = TypeMenu::where('category','domestic')->get();
        $baners = Carousel::all();


        $data = [

            'gadjets'=>$gadjets,
            'beauty'=>$beauty ,
            'tv'=> $tv,
            'computer'=> $computer,
            'photo'=>$photo ,
            'smalldomestic'=>$smalldomestic,
            'domestic'=>$domestic ,
            'game'=>$game ,
            'pot'=> $pot,
            'clima'=> $clima,
            'domestic'=> $domestic,
            'baners'=>$baners,
            'title'=>$title

        ];

    	return view('client.main',$data);
    }

    public function event()
    {
        $title = "Aksiyalar";

        $types = TypeMenu::all();

        $allcollection =collect();

        foreach ($types as $type) {

            $product_type = ucfirst($type->type);
            $class = app("App\Types\\$product_type");

            $newcollection = $class::where('status','!=','');

            $allcollection = $allcollection->merge($newcollection->get());

        }

        $collection = $allcollection;

        $count = $collection->count();


        $data = [

            'collection'=>$collection,

            'title'=>$title

        ];

        return view('client.discount',$data);
    }

    public function about()
    {
        $title = "Haqqımızda";

        $data = [

            'title'=>$title

        ];

    	return view('client.about',$data);
    }

    public function filial()
    {
        $title = "Filiallar";

        $collection = Map::all();

        $data = [

            'title'=>$title,
            'collection'=>$collection

        ];

    	return view('client.contacts',$data);
    }


    public function category($type)
    {
    
        $product_type = $type;

        $product_type = ucfirst($product_type);

        $collection = app("App\Types\\$product_type");

        $title = TypeMenu::where('type',$type)->first();

        $all = $collection->all();


        $inputs = ProductsFilter::where('type',$product_type)->get()->toArray();


          if (request('minprice') === null or request('minprice') > request('maxprice')) {

                $minprice =(int)  $all->min('price');

            }else{
                $minprice = request()->minprice;
            }

             if (request('maxprice') === null or request('minprice') > request('maxprice') or request('maxprice') === 0) {

                $maxprice = (int)$all->max('price');
            }else{
                $maxprice = request()->maxprice;
            }



        if (request()->isMethod('get')){
           
            $title = $title->title;
            $filters_array = ProductsFilter::where('type',$product_type)->get();
            
            $collection = $collection::paginate(20);

            $data = [
                'type'=>$product_type,
                'filters_list'=>$filters_array,
                'title'=>$title,
                'all'=>$all,
                'collection'=>$collection,
                'inputs'=>$inputs,
                'minprice'=>$minprice,
                'maxprice'=>$maxprice

            ];

            return view('client.categoryview',$data);
        }

        //----------------------------------------------

        if (request()->isMethod('post')){


            $filters_on_request_array = request()->data; 




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

            $data = request()->all();


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
            
        })->whereBetween('price',[$minprice,$maxprice])->paginate(1); 

            // $data = [


            //     'type'=>$product_type,
            //     'filters_list'=>$filters_array,
            //     'filtername_post'=>$filtername_post,
            //     'title'=>$title,
            //     'all'=>$all,
            //     'collection'=>$collection,
            //     'inputs'=>$inputs,
            //     'minprice'=>$minprice,
            //     'maxprice'=>$maxprice

            // ];

            return response()->json($collection);
    }
}

    public function productClient($type,$id)
    {
        $title = TypeMenu::where('type',$type)->first();
        $product_type = $type;
        $typeatr = TypeAtr::where('type',$product_type)->get();
        $product_type = ucfirst($product_type);
        $collection = app("App\Types\\$product_type");
        $collection = $collection::find($id);
        $title = $collection->name;
        $kreditmaket_id = KreditPercent::find($collection->percentkredit);

        if ($collection->comision != 0)
        {
            $comision = $collection->price/100*$collection->comision;
        }else{
            $comision = $collection->comision;
        }

        $data = [
            'kreditmaket_id'=>$kreditmaket_id,
            'comision'=>$comision,
            'atr'=>$typeatr,
            'title'=>$title,
            'collection'=>$collection

        ];

        return view('client.productview',$data);
    }

    public function buy(Request $request,$type,$id)
    {
        if (request()->isMethod('post')){
            $percent = request()->credit_radio;

            $mount = request()->mount;

            $product_type = ucfirst($type);

            $collection = app("App\Types\\$product_type");

            $collection = $collection::find($id);

            $typical_title = $title = TypeMenu::where('type',$type)->first();

            $title = $collection->name.'  məhsulun alınması';

            $data = [
                'percent'=>$percent,

                'mount'=>$mount,

                'typical_title'=>$typical_title,

                'collection'=>$collection,

                'title'=>$title

            ];

            return view('client.basket',$data);
        }




    }


}
