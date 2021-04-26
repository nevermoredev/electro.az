@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə {{ $collection->address }} unvanındaki xəritəni deyişdirə bilərsiniz</h3>
        <form action="{{ route('edit-map',['id'=>$collection->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="text" class="form-control" name="address" placeholder="Unvan" value="{{ $collection->address }}">    
                </div> 
                <div class="input-add">
                        <input type="text" class="form-control" name="number" placeholder="Telefon" value="{{ $collection->number }}">    
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="iframe" placeholder="Xəritə" value="{{ $collection->iframe }}">    
                </div>

                <small id="emailHelp" class="form-text text-muted">Deyişdirdiniyiz xəritəni  ,xəritə siyahında tapa bilərsuz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
