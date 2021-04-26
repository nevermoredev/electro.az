<?php

namespace App\Http\Controllers;


use App\Maker;
use Illuminate\Http\Request;
use App\Managment\TypeAtr;
use App\Managment\Cat;
use App\Managment\TypeMenu;
use App\Managment\Type;
use App\KreditPercent;



use DB;

class ProductEditController extends Controller
{
    //Изменение гаджеты ----------------------------------------------------------------------------------------------------------------------



    public function editProduct(Request $request,$category,$type,$id)
    {

        $producttype = $type;
        $producttype = ucfirst($producttype);
        $collection = app("App\Types\\$producttype");
        $collection = $collection->find($id);
        $inputatr = TypeAtr::where('type',$type)->get();
        $menucat = Cat::all();
        $typemenu = TypeMenu::where('type',$type)->first();
        $typemenu =  $typemenu->title;
        $cats = Cat::where('name',$category)->first();
        $category_set = $cats->name;
        $random = mt_rand(1, 99999);
        $kreditpercent = KreditPercent::all();

        $types = TypeMenu::where('category',$category)->get();

        $text = $collection->name.'  deyişildi';


        $makers = Maker::all();

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            if ($request->hasFile('img')) {



                $file = $request->file('img');

                $input['img'] = $file->getClientOriginalName();


                $file->move(public_path() . '/img/products/' . $input['type'] . '/', $random.$input['img']);

                $input['img'] = $file->getClientOriginalName();

                $input['img'] = $random . $input['img'];

                if ($input['old_img'] != '') {

                    $filename = public_path() . '/img/products/' . $type. '/'. $input['old_img'];

                    if (file_exists($filename)) {

                    unlink($filename);
                }

                }

                unset($input['old_img']);

            } else {

                $input['img'] = $input['old_img'];
            }

            $collection->fill($input);


            if ($collection->update()) {

                return redirect('managment/product/view/'.$collection->category.'/'.$type.'/')->with('status', $text);
            }
        }

        if ($request->isMethod('get')) {

            $data = [
                'kreditpercent'=>$kreditpercent,
                'producttypename'=>$type,

                'typeatr'=>$inputatr,

                'category'=>$category,

                'producttype'=>$producttype,

                'product' => $collection,

                'makers' => $makers,

                'menucat'=>$menucat,

                'title'=>'Deyişdir '.$typemenu,

                'types'=>$types,

                'menucat'=>$menucat,

                'category_set'=>$category_set

            ];
            return view('panel.products.edit', $data);
        }
    }

}
