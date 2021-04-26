<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Model;
use Mail;


class FeedbackController extends Controller
{
    public function send(Request $request) {

        //Template

        $email  = 'office@electro.az';
        $name = 'Electrolux sayt';


        $phonetemplate = 'Telefon nömrəsi';
        $addresstemplate = 'Ünvan';
        $nametemplate = 'Ad Soyad Atasının Adı';
        $producttemplate = 'Məhsul adı';
        $datetemplate = 'Tarix';
        $personbuytemplate = 'Müştərinin alış-verişlərinin sayı';
        $buymethodtemplate = 'Ödəmə üsulu';
        $pricetemplate = 'Qiymət';
        $mounttemplate = 'Ay';
        $type = request()->type;
        $type = ucfirst($type);

        $collectionid = request()->id;
        $collection = app("App\Types\\$type");
        $collection = $collection::find($collectionid);

        //Order

        $address = request()->address;
        $name = request()->fio;
        $phone = request()->number;
        $product= request()->product;
        $mount = request()->mount;
        $buymethod = request()->buymethod;
        $personbuy = request()->personbuy;
        $percentkredit = request()->percent_js;


        $datenow = date('d.m.Y H:i');

        $commit = request()->commit;

        //Array

        $model = new Order;

        $filds = $request->except('id','_token');

        $pricesecond = $collection->price;


        if ($mount != 'Nağd'){

            $pricenow = round($pricesecond +($pricesecond/100*$percentkredit)+($pricesecond/100 * $collection->comision)-($pricesecond/100*$personbuy));

            $filds['price'] = $pricenow;
        }else{
            $filds['price'] = $pricesecond;
        }

        $model->fill($filds);

        $price = $model->price;

        if($model->personbuy  == 0){
            $model->personbuy =  'İlk alış';
        }elseif ($model->personbuy == 5){
            $model->personbuy = 'İkinci alış';
        }else{
            $model->personbuy = 'Üçüncü alış və ya daha çox';
        }

        $personbuymain = $model->personbuy;


        $model->save();



        $template = array($nametemplate,$addresstemplate,$phonetemplate,$producttemplate,$datetemplate,$mounttemplate,$buymethodtemplate,$personbuytemplate,$pricetemplate);
        $order = array($name,$address,$phone,$product,$datenow,$mount,$buymethod,$personbuymain,$price);



        //Sending

        $number = $model->id;

        $text = 'Sifarişiniz qəbul edildi, operatorun zəngini gözləyin.Sifariş " '.$model->product.' "';

        Mail::send(['html'=>'client.feedback'],['commit'=>$commit,'number'=>$number,'template'=>$template,'order'=>$order],function($message) use ($email, $name) {
            $message->to('zeittensei@gmail.com',$name)->subject('Saytdan məhsul sifarişi');
            $message->from('site@electro.az','Saytdan məhsul sifarişi');
        });
        return redirect()->route('productClient',['type'=>$collection->type,'id'=>$collection->id])->with( 'status',$text);
    }

}
