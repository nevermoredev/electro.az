@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə Rol alavə edə bilərsiniz</h3>
        <form action="{{ route('add-role') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="text" class="form-control" name="role" placeholder="Role">    
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
