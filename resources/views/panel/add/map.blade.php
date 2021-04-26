@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə Xəritə alavə edə bilərsiniz</h3>
        <form action="{{ route('add-map') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                    <input type="text" class="form-control" name="filial" placeholder="Filial">
                 </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="address" placeholder="Unvan">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="number" placeholder="Telefon">
                </div>
                <div class="input-add">
                        <input type="text" class="form-control" name="iframe" placeholder="Xəritə">
                </div>

                <small id="emailHelp" class="form-text text-muted">Alavə xəritə,xəritələrin siyahında tapa bilərsuz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
