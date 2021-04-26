@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Təzə filter</h3>
        <form action="{{ route('add-filter',['category'=>$category,'type'=>$producttype]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" value="{{$producttype}}" name="type">
                <input type="hidden" name="category" value="{{$category}}">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="filtername" placeholder="Filter">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="title" placeholder="Adı">
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
