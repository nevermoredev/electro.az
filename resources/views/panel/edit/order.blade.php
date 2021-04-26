@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
    <div class="form-add">
        <h3>Bu səyfədə sifarişin statusu deyişdirə bilərsiniz</h3>
         <form action="{{ route('edit-order',['id'=>$collection->id]) }}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                    <label for="inputState">Status seçin</label>
                    <select id="inputState" class="form-control" name="status">
                            @foreach ($status as $status)
                            <option @if ($status->status  == $collection->status) selected @endif value="{{ $status->status }}">{{ $status->status }}</option> 
                            @endforeach
                    </select>
                </div>
              <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
