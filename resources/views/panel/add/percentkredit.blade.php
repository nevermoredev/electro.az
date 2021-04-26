@extends('main-panel')

@section('header')
@endsection
@section('content')
    <div class="container">
        @include('back')
        <div class="form-add-kredit">
            <h3>Yeni kredit şablonu</h3>
            <form action="{{ route('add-percentkredit') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="container">
                        <form class="form_add">
    <div class="form-row align-items-center">
        <div class="input_name"> <div class="col-sm-6 my-2">
        <label for="exampleFormControlTextarea1">Adı</label>
        <input name="name"  placeholder="Adı" type="text" class="form-control" id="" aria-describedby="" >
    </div></div>
    </div>
                            
  <div class="form-row align-items-center">
    
   

   
          @for($i = 2 ;$i < 37 ;$i++)
           <div class="col-sm-1 my-1">
                            @php
                            $key = 'ay_'.$i;
                            @endphp
                                    <label for="exampleFormControlTextarea1">{{$i.' - ay'}}</label>
                                    <input name="{{$key}}"  placeholder="Faiz" type="number" class="form-control" id="" aria-describedby="" >

                            </div>
                        @endfor


                                
                        
                      
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
