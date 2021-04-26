@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Filter dəyşdir</h3>
        <form action="{{ route('edit-filter',['id'=>$collection->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="type" value="{{$collection->type}}">
                <div class="input-add">
                        <input type="text" class="form-control" name="filtername" placeholder="Filter" value="{{$collection->filtername}}">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="title" placeholder="Adı" value="{{$collection->title}}">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
              </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
