@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
    @include('back')
    <div class="form-add">
        
        <form action="{{ route('add-brend') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Tezə brend adı</label>
                <input type="text" name="maker" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brend adı">
                <small id="emailHelp" class="form-text text-muted">Alavə etdiyiz Brendı ,məsul alavə edəndə siyahıda secə bilərsiz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')
    
@endsection
