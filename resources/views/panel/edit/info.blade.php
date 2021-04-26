@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
    <div class="form-add">
        <h3>Bu səyfədə əsas informasiyanı  deyişdirə bilərsiniz</h3>
        <form action="{{ route('edit-info') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="text" class="form-control" name="email" placeholder="E-MAIL" value="{{ $collection->email }}">    
                </div> 
                <div class="input-add">
                        <input type="text" class="form-control" name="number" placeholder="Nomrələr" value="{{ $collection->number }}">    
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
