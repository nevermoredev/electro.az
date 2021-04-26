@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Təzə istifadəçi</h3>
        <form action="{{ route('add-user') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="name" placeholder="Login">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="fio" placeholder="ASAA">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="number" placeholder="Nömrələri"> 
                </div>
                <div class="input-add">
                        <input type="password" class="form-control" name="password" placeholder="Parol">
                </div> 
                        <div class="form-group">
                            <label for="inputState">Rol seçin</label>
                            <select id="inputState" class="form-control" name="role">
                            @foreach ($collection as $role)
                            <option value="{{ $role->role }}">{{ $role->role }}</option> 
                            @endforeach
                    </select>
                </div> 
                <button type="submit" class="btn btn-primary mb-2">Alavə et</button> 
                </div> 
              </div>
              
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
