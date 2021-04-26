<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\KreditPercent;


use DB;

use App\Order;
use App\Managment\Cat;
use App\Managment\TypeMenu;
use App\ProductsFilter;




class ProductViewController extends Controller
{
	//View
	
	//телефоны и гаджеты -----------------------------------------------------------------------------------------------------------------------

	public function ViewProduct($category,$type)
	{

		$menucat = Cat::all();
		$cats = Cat::where('name',$category)->first();
		$category_set = $cats->name;
		$types = TypeMenu::where('category',$category)->get();
		$typename = TypeMenu::where('type',strtolower($type))->first();
		$title = $typename->title;	
		$product_type = $type;
		$product_type = ucfirst($product_type);
		$model = app("App\Types\\$product_type");

		$model = $model->where('type',strtolower($type));
        $kreditpercent = KreditPercent::all();
        $model = $model->paginate(20);
		$count = $model->count();
		$producttypename = $type;
		$unchecked = Order::where('status' , 'Baxılmiyıb')->count();
		$filters = ProductsFilter::where('type',$type)->get();
		$maket_list = 


		$data = [
		    'kreditpercent'=>$kreditpercent,
			'producttype'=>$category,
            'filters'=>$filters,
            'cats'=>$cats,
			'unchecked'=>$unchecked,
			'producttypename'=>$producttypename,
			'types'=>$types,
			'count'=>$count,
    		'title' => $title,
			'collection' =>$model,
			'category_set'=>$category_set,
			'menucat'=>$menucat,
			'typename'=>$typename

    	];

    	return view('panel.products.view',$data);
	}
}