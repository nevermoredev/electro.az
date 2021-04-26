@extends('main-panel')
@section('header')
@include('panel.products.header')
@endsection
@section('content')
<div class="types_nav">
    <ul class="nav smallnav">

        @foreach ($types as $type)
        <li class="nav-item @if ( $producttypename === $type->type)
            seted-type
            @endif"><a class="nav-link" href="" onclick="alert('Siz deyişdirmeye qirmisiniz')">{{$type->title}}</a></li>
        @endforeach
    </ul>
    </div>
     <div class="container">
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə {{ $title }} alavə edə bilərsiniz</h3>
        <form action="{{ route('addProduct',['category'=>$category,'type'=>$producttypename]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="category" value="{{ $category}}">
            <input type="hidden" name="type" value="{{ $producttypename }}">
              <div class="form-group">
                <div class="form-group">
                <label for="exampleFormControlSelect2">Brend</label>
                <select class="form-control" id="exampleFormControlSelect2" name="brand">
                  <option selected disabled>Brend seç</option>
                  @foreach ($makers as $maker)
                  <option value="{{ $maker->maker }}">{{ $maker->maker }}</option>
                  @endforeach
                </select>
              </div>
              <label for="exampleFormControlInput1">Adı</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Qiymət</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="price" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Qarantiya</label>
              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="waranty" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Kredit şablonu</label>
                <select name="percentkredit" class="form-control" id="exampleFormControlInput1">
                    <option selected disabled value="">Kredit şablonu sec...</option>
                    @foreach($kreditpercent as $shablon)

                            <option value="{{$shablon->id}}">{{$shablon->name}}</option>
                        @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">İlkin ödəniş</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="deposit" >
              </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Video linkı</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="video" >
            </div>

              @foreach ($typeatr as $element)
            @php
              $atr = $element->atr;
            @endphp

                <div class="form-group">
                <label for="exampleFormControlInput1">{{ $element->name }}</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="{{ $element->atr }}">
              </div>
              @endforeach
            <div class="input-group mb-3 input-add">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Yukle</span>
                    </div>
                    <div class="custom-file">
                      <input name="img" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
                      <label class="custom-file-label" for="inputGroupFile01">Şəkil seç</label>
                    </div>
            </div>
            <div class="form-group">
                <div class="input-add">
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Teglar</label>
                            <textarea name="tags" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </div>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
