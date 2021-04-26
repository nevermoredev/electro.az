@extends('main-panel')
@section('content')
<div class="types_nav">
    <ul class="nav smallnav">

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
        <form action="{{ route('edit-maket',['category'=>$category_set,'type'=>$producttypename]) }}" method="get" enctype="multipart/form-data">
            {{ csrf_field() }}
                <select name="percentkredit" class="form-control" id="exampleFormControlInput1">
                    <option selected disabled value="">Kredit şablonu sec...</option>
                    @foreach($makets_list as $shablon)
                            <option value="{{$shablon->id}}">{{$shablon->name}}</option>
                        @endforeach
                </select>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
