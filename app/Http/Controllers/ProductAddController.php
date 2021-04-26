<?php

namespace App\Http\Controllers;

use App\Maker;
use Illuminate\Http\Request;
use App\Managment\TypeAtr;
use App\Managment\Cat;
use App\Managment\TypeMenu;
use App\Managment\Type;
use App\KreditPercent;





class ProductAddController extends Controller
{
    //Добавление гаджетов---------------------------------------------------------------------------------------------------------------------------

    //Смартфоны
    public function addProduct(Request $request,$category,$type)
    {

        $type_set = TypeMenu::where('type',$type)->first();
        $producttype = $type;
        $producttype = ucfirst($producttype);
        $text = 'Təzə '.$type_set->title.' alavə olundu';
        $menucat = Cat::all();
        $types = TypeMenu::where('category',$category)->get();
        $inputatr = TypeAtr::where('type',$type)->get();
        $cats = Cat::where('name',$category)->first();
        $category_set = $cats->name;
        $kreditpercent = KreditPercent::all();


        if ($request->isMethod('get')) {

            $makers = Maker::all();

            $data =
                [
                    'makers' => $makers,
                    'cats'=>$cats,
                    'category'=>$category,
                    'producttypename'=>$type,
                    'typeatr'=>$inputatr,
                    'producttype'=>$producttype,
                    'kreditpercent'=>$kreditpercent,
                    'menucat'=>$menucat,
                    'title' => 'Alavə yarat '.$type_set->title,
                    'types'=>$types,
                    'menucat'=>$menucat,
                    'category_set'=>$category_set


                ];

            return view('panel.products.add', $data);
        }

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $random = mt_rand(1, 99999);


            if ($request->hasFile('img')) {

                $file = $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                $input['img'] = $random . $input['img'];
                $file->move(public_path() . '/img/products/' . $input['type'] . '/', $input['img']);
            }
            
            $collection = app("App\Types\\$producttype");
                

            $input['product_name'] = $input['name'];

            

            $collection->fill($input);

            if ($collection->save()) {

                return redirect('managment/product/add/'.$category.'/'.$type)->with('status', $text);
            }
        }
    }


    

   

    //Конец Малая бытовая техника -------------------------------------------------------------------------------------------------------
}
