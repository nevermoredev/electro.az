@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
    @include('back')
    <div class="form-add">
        <h3>Bu səyfədə istifadəçinin rolu  deyişdirə bilərsiniz</h3>
        <p>İstifadəçı:  {{ $collection->name }} </p>
        <form action="{{ route('edit-role',['id'=>$collection->id]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                    <label for="inputState">Rol seçin</label>
                    <select id="inputState" class="form-control" name="role">
                            @foreach ($roles as $role)
                            <option @if ($role->role  == $collection->role) selected @endif value="{{ $role->role }}">{{ $role->role }}</option> 
                            @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
