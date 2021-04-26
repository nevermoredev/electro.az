<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Property;
use DB;
use App\Maker;


class ProductController extends Controller
{

  public function addBrend(Request $request)
  {

    $text = 'Brend alavə olundu';

    if ($request->isMethod('get')) {

        $title = 'Brend alavə et';

        $data = [

          'title'=>$title

        ];

        return view('panel.products.addbrend',$data);
    }
    if ($request->isMethod('post')) {

      $input = $request->except('_token');

      $brend =  new Maker;

      $brend->fill($input);

      $brend->save();

       return redirect()->back()->with('status',$text);

    }
  }



   //EDIT



   public function edit(Request $request,$id){

     $makers = Maker::all();

     $product = Product::find($id);


     $property = Property::firstOrNew(['name'=>$product->name]);


     $data =
          [
               'product'=>$product,

               'property'=>$property,

               'title'=>'Dəyşdir',

               'makers'=>$makers
          ];


     if($request->isMethod('post')){

          if($request->hasFile('img')){

               $input = $request->except('_token');

               $oldimg =  $input['oldimg'];

               $path = public_path().'/img/products/main/'.$oldimg;

               if(is_file($path)){

                    if(unlink($path)){

                         $file = $request->file('img');

                         $input['img'] = $file->getClientOriginalName();

                         $file->move(public_path().'/img/products/main/',$input['img']);

                    }

               }
               else{

                    $file = $request->file('img');

                         $input['img'] = $file->getClientOriginalName();

                         $file->move(public_path().'/img/products/main/',$input['img']);
               }

          }else{

               $input = $request->except('_token');

               $oldimg =  $input['oldimg'];

               $input['img'] = $oldimg;

          }

          $property->name = $input['name'];

          $property->fill($input);

          $product->fill($input);

          if($product->save() and $property->save()){

               $text = 'Məsul '.$input['maker'] .' '.$input['name'].' deyişilik olundu';

               return redirect()->back()->with('status',$text);
               }
          }


          return view('panel.products.edit.edit',$data);
     }


   //DELETE

   public function del($id)
   {
        $product = Product::find($id);

        $properties = Property::where('name',$product->name);

        $path = public_path().'/img/products/main/'.$product['img'];

          $text ='Məsul'. $product->name. ' silindi';

        if(unlink($path)){

          $properties->delete();

          $product->delete();

          return redirect()->back()->with('status',$text);

        }

   }
}
