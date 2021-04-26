<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use Illuminate\Database\Eloquent\Model;
use App\Info;
use App\Map;
use App\Carousel;
use App\Social;
use App\User;
use App\Messages;
use Auth;
use App\Role;
use App\Order;
use Illuminate\Support\Carbon;
use App\orderStatus;
use App\ProductsFilter;
use App\KreditPercent;

use App\Managment\TypeAtr;
use App\Managment\Cat;
use App\Managment\TypeMenu;

class PanelController extends Controller
{
    public function order()
    {

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $orders = Order::all();

       $data = [

         'unchecked'=> $unchecked,

        'collection'=>$orders,

         'title' => 'Sifarişlər'

       ];

       return view('panel.main',$data);

    }

    public function edit_order(Request $request,$id)
    {
      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $order = Order::find($id);

      $status = orderStatus::all();

       if ($request->isMethod('get')) {

         $data = [

          'unchecked'=> $unchecked,

        'status'=>$status,

        'collection'=>$order,

         'title' => 'Sifarişlər'

       ];

       return view('panel.edit.order',$data);

       }

       if ($request->isMethod('post')) {

        $input = $request->except('_token');

        $order->fill($input);

        $order->save();

        $text = 'Sifarişin statusu deyişildi';

        return redirect('managment/order')->with('status',$text);

       }

    }



    public function product()
    {
      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $data = [

        'unchecked'=> $unchecked,

         'title' => 'Məsullar'

       ];

       return view('panel.products',$data);
    }

    public function info()
    {

      $info = Info::find(1);

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $data = [

        'unchecked'=> $unchecked,

        'collection'=> $info,

         'title' => 'Əsas informasiya'

       ];

       return view('panel.info',$data);
    }


    //просмотр карт
    public function maps()
    {
      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $map = Map::all();

      $data = [

        'unchecked'=> $unchecked,

        'collection'=>$map,

         'title' => 'Xaritələr'

       ];

       return view('panel.maps',$data);
    }

    //Добавление карт

    public function add_map(Request $request)
    {
      if($request->isMethod('get')){

        $data = [

          'title' => 'Xaritələr'

        ];

        return view('panel.add.map',$data);
      }

      if($request->isMethod('post')){

        $text = 'Təzə xəritə alavə olundu';

        $input = $request->except('_token');

        $map = new Map();

        $map->fill($input);

        $map->save();

        return redirect('managment/maps')->with('status',$text);
      }


    }


    //изменение карт

    public function edit_map(Request $request,$id)
    {
      $map = Map::find($id);

      if($request->isMethod('get')){

        $data = [

          'collection'=>$map,

           'title' => 'Xaritələr'

         ];

         return view('panel.edit.map',$data);

      }

       if($request->isMethod('post')){


        $text = 'Xəritə deyişdirilirdi';

        $input = $request->except('_token');


        $map->fill($input);

        $map->save();

        return redirect('managment/maps')->with('status',$text);

       }

    }

    //удаление карт

    public function delete_map($id)
    {
      $text = 'Xəritə silindi';

      $map = Map::find($id);

      $map->delete();

      return redirect('managment/maps')->with('status',$text);

    }

    //просмотр соцсети

    public function social()
    {
      $social = Social::all();

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $data = [

        'unchecked'=> $unchecked,

        'collection'=>$social,

         'title' => 'Social linklər'

       ];

       return view('panel.social',$data);
    }

    //Добавление соцсетей

    public function add_social(Request $request)
    {
      if($request->isMethod('get')){

        $data = [

          'title' => 'Social linklər'

        ];

        return view('panel.add.social',$data);
      }

      if($request->isMethod('post')){

        $text = 'Təzə social link alavə olundu';

        $input = $request->except('_token');

        $social = new Social();

        $social->fill($input);

        $social->save();

        return redirect('managment/social')->with('status',$text);
      }


    }


    //изменение соцсетей

    public function edit_social(Request $request,$id)
    {
      $social = Social::find($id);

      if($request->isMethod('get')){

        $data = [

          'collection'=>$social,

           'title' => 'Social linklər'

         ];

         return view('panel.edit.social',$data);

      }

       if($request->isMethod('post')){


        $text = 'Social linklər';

        $input = $request->except('_token');


        $social->fill($input);

        $social->save();

        return redirect('managment/social')->with('status',$text);

       }

    }

    //удаление соцсетей

    public function delete_social($id)
    {
      $text = 'Xəritə silindi';

      $social = Social::find($id);

      $social->delete();

      return redirect('managment/social')->with('status',$text);

    }


    //просмотр банера

    public function baner()
    {
      $carousel = Carousel::all();

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      $data = [

        'collection'=>$carousel,

        'unchecked'=> $unchecked,

         'title' => 'Baner'

       ];

       return view('panel.baner',$data);
    }

    //Добавление банера

    public function add_baner(Request $request)
    {
      if($request->isMethod('get')){

        $data = [

          'title' => 'Baner'

        ];

        return view('panel.add.baner',$data);
      }

      if($request->isMethod('post')){

        $text = 'Təzə baner alavə olundu';

        if($request->hasFile('img')){

          $input = $request->except('_token');

          $file = $request->file('img');

          $input['img'] = $file->getClientOriginalName();

          $file->move(public_path().'/img/carousel/',$input['img']);

          $carousel = new Carousel();

          $carousel->fill($input);

          $carousel->save();

          return redirect('managment/baner')->with('status',$text);

        }


      }


    }


    //изменение банера

    public function edit_baner(Request $request,$id)
    {
      $carousel = Carousel::find($id);

      if($request->isMethod('get')){

        $data = [

          'collection'=>$carousel,

           'title' => 'Baner'

         ];

         return view('panel.edit.baner',$data);

      }

       if($request->isMethod('post')){


        $text = 'Baner deyişildir';

        $input = $request->except('_token');

        if($request->hasFile('img')){

          $oldimg =  $input['oldimg'];

          $path = public_path().'/img/carousel/'.$oldimg;

          if(is_file($path)){

               if(unlink($path)){

                    $file = $request->file('img');

                    $input['img'] = $file->getClientOriginalName();

                    $file->move(public_path().'/img/carousel/',$input['img']);

               }

          }
          else{

               $file = $request->file('img');

                    $input['img'] = $file->getClientOriginalName();

                    $file->move(public_path().'/img/carousel/',$input['img']);
          }

     }else{

          $input = $request->except('_token');

          $oldimg =  $input['oldimg'];

          $input['img'] = $oldimg;

     }


        $carousel->fill($input);

        $carousel->save();

        return redirect('managment/baner')->with('status',$text);

       }

    }

    //удаление банера

    public function delete_baner($id)
    {
      $text = 'Baner silindi';

      $carousel = Carousel::find($id);

      $img = $carousel->img;

      $carousel = Carousel::find($id);

      $path = public_path().'/img/carousel/'.$img;

      if(is_file($path)){

        unlink($path);

      }


      $carousel->delete();

      return redirect('managment/baner')->with('status',$text);

    }



    //изменение информации

    public function edit_info(Request $request)
    {
      $info = Info::find(1);

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();

      if($request->isMethod('get')){

        $data = [

          'collection'=>$info,

          'unchecked'=>$unchecked,

           'title' => 'Əsas informasiya'

         ];

         return view('panel.edit.info',$data);

      }

       if($request->isMethod('post')){


        $text = 'Əsas informasiya deyişdirilirdi';

        $input = $request->except('_token');


        $info->fill($input);

        $info->save();

        return redirect('managment/info')->with('status',$text);

       }

    }



    public function users()
    {

      $user = User::all();

      $roles = Role::all();

      $unchecked = Order::where('status' , 'Baxılmiyıb')->count();


      $data = [

        'unchecked'=> $unchecked,

        'collection' => $user,

        'roles'=>$roles,

         'title' => 'İstfadəcilər'

       ];

       return view('panel.users',$data);
    }


    public function messages()
    {

      $messages = Messages::all();

      $data = [

        'collection' => $messages,

         'title' => 'Mesajlar'

       ];

       return view('panel.messages',$data);
    }

    public function edit_profile(Request $request,User $user)
    {

      $id = Auth::user()->id;

      $user = User::find($id);

      if($request->isMethod('get')){

        $data = [

          'collection' => $user,

           'title' => 'Profilim'

         ];

         return view('panel.profiles',$data);

      }

        if($request->isMethod('post')){

          $input = $request->except('_token');

          $user->fill($input);

          $user->save();

          $text = "Profile deyişdirildi";


        return redirect('managment/profile')->with('status',$text);

       }
    }



    public function addrole(Request $request)
    {

      $text = 'Təzə rol əlavə olundu';

      if($request->isMethod('get')){

        $data = [

          'title'=>'İstfadəcilər'

        ];

        return view('panel.role',$data);

      }

       	if($request->isMethod('post')){

          $input = $request->except('_token');

          $role = new Role();

          $role->fill($input);

          $role->save();

          return redirect('managment/users')->with('status',$text);

         }

    }

    public function edit_role(Request $request,$id)
    {

      $user = auth()->user();

      if ($user->id != 1) {

        $text = 'Siz rolu deyişdirə bilməsiz';
        return redirect('managment/users')->with('status',$text);
      }

      $text = 'Istifadəçi rolu deyişildi';

      $user = User::find($id);

      $roles = Role::all();

      if($request->isMethod('get')){


        $data = [

          'roles'=>$roles,

          'collection'=>$user,

          'title'=>'İstfadəcilər'

        ];

        return view('panel.edit.role',$data);

      }

       	if($request->isMethod('post')){

          $input = $request->except('_token');

          $user->fill($input);

          $user->save();

          return redirect('managment/users')->with('status',$text);

         }

    }

    public function adduser(Request $request)
    {

      $text = 'Təzə istifadəçi əlavə olundu';



      if($request->isMethod('get')){

        $role = Role::all();

        $data = [
          'collection'=>$role,
          'title'=>'İstfadəcilər'

        ];

        return view('panel.adduser',$data);

      }

       	if($request->isMethod('post')){

          $input = $request->except('_token');

          $input['password'] = bcrypt($input['password']);

          $user = new User();

          $user->fill($input);

          $user->save();

          return redirect('managment/users')->with('status',$text);

         }

    }

    public function addfilter(Request $request,$category,$type)
    {

      $text = 'Təzə filter əlavə olundu';



      if($request->isMethod('get')){


        $types = TypeMenu::all();

        $cats = $category;

        $producttype = $type;

        $data = [
            'producttype'=>$producttype,
            'category'=>$cats,
            'types' => $types,
          'title'=>'Filterlər'

        ];

        return view('panel.add.filter',$data);

      }
       	if($request->isMethod('post')){

          $input = $request->except('_token');

            $collection = new ProductsFilter();

            $collection->fill($input);

            $collection->save();

          $type  = $collection->type;

            return redirect('managment/product/view/gadjet/'.$type)->with('status',$text);

         }

    }

    public function editfilter(Request $request,$id)
    {

        $text = 'Filtr dəyişdirildi';

        $collection = ProductsFilter::find($id);

        if($request->isMethod('get')){


            $types = TypeMenu::all();

            $data = [
                'collection'=>$collection,
                'types' => $types,
                'title'=>'Filterlər'

            ];

            return view('panel.edit.filter',$data);

        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $collection->fill($input);

            $collection->save();

            $type  = $collection->type;

            return redirect('managment/product/view/gadjet/'.$type)->with('status',$text);

        }

    }

    public function deletefilter(Request $request,$category,$type,$id)
    {
        $text = 'Filter silindi';

        $model = ProductsFilter::find($id);

        $model->delete();

        return redirect()->route('viewProduct',['category'=>$category,'type' =>$type])->with('status',$text);
    }

     public function delete_user(Request $request,$id)
    {
      $text = 'Istifadəci silindi';

        if (auth()->user()->id = 1) {

          $user = User::find($id);

          $user->delete();

          return redirect('managment/users')->with('status',$text);

        }else{

          $text = 'Profil silməyə qadağandır';

          return redirect('managment/users')->with('status',$text);
        }
    }

    public function addAtr(Request $request)
    {


 $text= 'Atribut alavə olundu';

        if ($request->isMethod('get')) {



            $title = 'Yeni atrribut alavə et';

            $menucat = Cat::all();

            $data =
                [
                    'title'=>$title,
                    'menucat'=>null,
                    'types'=>null

                ];

            return view('panel.products.atr', $data);
        }

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $collection = new TypeAtr;

            $collection->fill($input);

            if ($collection->save()) {

                return redirect('managment/add/atr')->with('status', $text);
            }
        }
    }
    public function addTypeMenu(Request $request)
    {

        $text= 'Tip alavə olundu';


        if ($request->isMethod('get')) {



            $title = 'Yeni tip alavə et';

            $menucat = Cat::all();

            $data =
                [
                    'title'=>$title,
                    'menucat'=>null,
                    'types'=>null

                ];

            return view('panel.products.typemenu', $data);
        }

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $collection = new TypeMenu;

            $collection->fill($input);

            if ($collection->save()) {

                return redirect('managment/add/typemenu')->with('status', $text);
            }
        }
    }

    public function edit_maket($category,$type){

      if (request()->isMethod('post')) {

        $text = 'Şablonlar deyişdi';

        $model = app("App\Types\\$type");

        $collection = $model->whereIn('id',request()->id)->get();

        $maket_id = request('percentkredit');

        foreach ($collection as $key) {
          
          $id = $key->id;

          $model = $model->find($id);

          $model->percentkredit = $maket_id;

          $model->update();

        }
        
        return redirect('managment/product/view/'.$category.'/'.$type.'/')->with('status', $text);

      }
          


      }

}
