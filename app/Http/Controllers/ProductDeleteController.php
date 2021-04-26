<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maker;
use App\Product;



use DB;

class ProductDeleteController extends Controller
{
    // Удаление гаджетов---------------------------------------------------------------------------------------------------------------------------

    public function deleteProduct($category,$type,$id)
    {
        $text = 'Məssul silindi';

        $type = ucfirst($type);

        $collection = app("App\Types\\$type");

        $collection = $collection::find($id);

        


        if (file_exists(public_path() . '/img/products/' . $collection->type . '/' . $collection->img)) {

            unlink(public_path() . '/img/products/' . $collection->type . '/' . $collection->img);
        }

        $collection->delete();



        return redirect('/managment/product/view/'.$collection->category.'/'.$collection->type)->with('status', $text);
    }

  }