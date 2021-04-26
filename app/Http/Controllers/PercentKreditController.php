<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KreditPercent;

class PercentKreditController extends Controller
{
    public function view()
    {

        $collection = KreditPercent::all();

        $title = 'Kredit';

        $data = [
            'title'=>$title,
            'collection'=>$collection,
        ];

        return view('panel.percentkredit',$data);
    }
    public function add()
    {
        $text = 'Şablon alavə olundu';

        if (request()->isMethod('post')){

            $filds = request()->except('_token');

            $model = new KreditPercent();

            $model = $model->fill($filds);

            $model->save();

            return redirect('managment/percentkredit')->with('status',$text);
        }

        $title = 'Təzə kredit şablonu ';

        $data = [

            'title'=>$title,
        ];

        return view('panel.add.percentkredit',$data);
    }
    public function edit(Request $request,$id)
    {
            $text = 'Şablon dəyişdirildi';
            
        if ($request->isMethod('get')) {

            

        $collection = KreditPercent::find($id);

        $title = 'Təzə kredit şablonu ';

        $data = [

            'title'=>$title,
            'collection'=>$collection
        ];

        return view('panel.edit.percentkredit',$data);
        }

        if ($request->isMethod('post')){

            $collection = KreditPercent::find($id);

            $filds = $request->except('_token');


           $collection->fill($filds);

            $collection->update();

            return redirect('managment/percentkredit')->with('status',$text);
        }

        

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete($id)
    {
        $text = 'Şablon silind';
        if (request()->id){
            $collection = KreditPercent::find($id);

            $collection->delete();

            return redirect('managment/percentkredit')->with('status',$text);
        }
    }

}
