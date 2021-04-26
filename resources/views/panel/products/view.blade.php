@extends('main-panel')
@section('header')
@include('panel.products.header')
@endsection
@section('content')
<div class="leftbox">
    <div class="types_nav">
    <ul class="nav smallnav">
        @foreach ($types as $type)
        <li class="nav-item @if ( $producttypename === $type->type)
            seted-type
            @endif"><a class="nav-link" href="{{ route('viewProduct',['category'=>$producttype,'type'=>$type->type]) }}">{{$type->title}}</a></li>
        @endforeach
    </ul>
    </div>
</div>
<div class="rightbox">
    <div class="container-table">
           <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                   <a class="nav-item nav-link active"  id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="true">Məhsul</a>
                   <a class="nav-item nav-link"  id="nav-filter-tab" data-toggle="tab" href="#nav-filter" role="tab" aria-controls="nav-filter" aria-selected="false">Filter</a>
                   <a class="nav-item nav-link"  id="nav-kredit-tab" data-toggle="tab" href="#nav-kredit" role="tab" aria-controls="nav-kredit" aria-selected="false">Kredit şablonu</a>
               </div>
           </nav>
           <div class="tab-content"  id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                   <div class="paginate-panel">
                       @if ($count != 0)
                           <div class="paginate-links">{{ $collection->links() }}</div>
                       @endif
                   </div>
                   <table class="table">
                       <div class="table-panel"> <p class="parfor-table">Tam {{ $title }}-tipinde olan sayi : {{ $count }}</p>
                           <a href="{{ route('addProduct',['category'=>$producttype,'type'=>$producttypename]) }}"><button class="btn-info">Yeni məhsul</button></a>
                       </div>
                       <thead class="thead" id="blue-table">
                       <tr>
                           <th scope="col">Deyişdir </th>
                           <th class="id" scope="col">İD</th>
                           <th scope="col">Statusu</th>
                           <th scope="col">Kateqoriya</th>
                           <th scope="col">Brend</th>
                           <th scope="col">Tipi</th>
                           <th scope="col">Adı</th>
                           <th scope="col">Qiymət</th>
                           <th scope="col">Kredit şablonu</th>
                           <th scope="col">İlkin ödəniş</th>
                           <th scope="col">Komisya</th>
                           <th scope="col">Video</th>
                           <th scope="col">Şəkili</th>
                           <th scope="col">Tegları</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           @foreach ($collection as $item)
                               <td>
                                   <a href="{{ route('editProduct',['category'=> $item->category ,'type'=> $item->type ,'id'=>$item->id]) }}"><button class="btn-warning">Deyişdir</button></a>
                                   <a href="{{ route('deleteProduct',['category'=>$item->category,'type'=>$item->type,'id'=>$item->id]) }}"><button class="btn-danger">Sil</button></a>
                               </td>
                               <th scope="row">{{ $item->id }}</th>
                               <td>{{ $item->status }}</td>
                               <td>{{ $item->category }}</td>
                               <td>{{ $item->brand }}</td>
                               <td>{{ $item->type }}</td>
                               <td>{{ $item->name }}</td>
                               <td>{{ $item->price }} AZN</td>
                               <td>@foreach($kreditpercent as $shablon)
                                       @if($shablon->id == $item->percentkredit )
                                           {{$shablon->name}}
                                       @endif
                                   @endforeach</td>
                               <td>{{ $item->deposit }}</td>
                               <td>{{ $item->comision }}</td>
                               <td>{{ $item->video }}</td>
                               <td><img src="{{ asset('img/products/'.$item->type.'/'.$item->img) }}" alt=""></td>
                               <td>{{ $item->tags }}</td>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
                   <div class="paginate-panel">
                       @if ($count != 0)
                           <div class="paginate-links">{{ $collection->links() }}</div>
                       @endif
                   </div>
               </div>
               <div class="tab-pane fade" id="nav-filter" role="tabpanel" aria-labelledby="nav-filter-tab">
                   <table class="table">
                       <div class="table-panel">
                           <a href="{{ route('add-filter',['category'=>$cats,'type'=>$producttypename]) }}"><button class="btn-info">Filter alavə et</button></a>
                       </div>
                       <thead class="thead" id="blue-table">
                       <tr>
                           <th scope="col">Deyişdir </th>
                           <th class="id" scope="col">İD</th>
                           <th scope="col">Tipi</th>
                           <th scope="col">Adı</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           @foreach ($filters as $item)
                               <td>
                                   <a href="{{ route('edit-filter',['id'=>$item->id]) }}"><button class="btn-warning">Deyişdir</button></a>
                                   <a href="{{ route('delete-filter',['category'=>$producttype,'type'=>$producttypename,'id'=>$item->id]) }}"><button class="btn-danger">Sil</button></a>
                               </td>
                               <th scope="row">{{ $item->id }}</th>
                               <td>{{ $item->filtername }}</td>
                               <td>{{ $item->title }}</td>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
               </div>

{{-- Кредит --}}
               <div class="tab-pane fade" id="nav-kredit" role="tabpanel" aria-labelledby="nav-kredit-tab">
                <form action="{{ route('edit-maket',['category'=>request()->category,'type'=>$producttypename]) }}" method="post">
                  @csrf

                   <table class="table kredit_table">
                       <div class="table-panel">
                        <select name="percentkredit" class="form-control selector_maket" id="exampleFormControlInput1">
                            <option selected disabled value="" style="background: #011741; ">Kredit şablonu sec...</option>
                            @foreach($kreditpercent as $shablon)
                                    <option value="{{$shablon->id}}">{{$shablon->name}}</option>
                                @endforeach
                          </select>
                        <input type="submit" class="btn-info" value="Secilən məhsuların şablonu dəyişdir">
                          
                       </div>
                       <thead class="thead" id="blue-table">
                       <tr>
                           <th scope="col" class="checkbox_maket"></th>
                           <th class="id" scope="col">Adı</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           @foreach ($collection as $item)
                               <td class="checkbox_maket">
                                   <input type="checkbox" name="id[]" value="{{$item->id}}">
                               </td>
                               <th class="name_maket" scope="row">{{ $item->name }}</th>
                       </tr>
                       @endforeach
                       </tbody>
                   </table>
                </form>
                  
               </div>


           </div>
       </div>

</div>


@endsection

@section('footer')

@endsection
