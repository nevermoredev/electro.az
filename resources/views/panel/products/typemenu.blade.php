@extends('main-panel')

@section('content')
<div class="types_nav">
    
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
        <form action="{{ route('addTypeMenu') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleFormControlInput1">Kategoriya</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="category" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Tipi</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="type" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Adı</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="title" >
            </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('footer')
    
@endsection