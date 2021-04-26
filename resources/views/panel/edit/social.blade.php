@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə {{ $collection->name }} linki deyişdirə bilərsiniz</h3>
        <form action="{{ route('edit-social',['id'=>$collection->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="text" class="form-control" name="url" placeholder="Unvan" value="{{ $collection->url }}">    
                </div> 
                <div class="input-add">
                        <input type="text" class="form-control" name="name" placeholder="Telefon" value="{{ $collection->name }}">    
                </div>

                <small id="emailHelp" class="form-text text-muted">Deyişdirdiniyiz linki  ,social linklərin siyahında tapa bilərsiz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
