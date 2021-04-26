@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə aksia alavə edə bilərsiniz</h3>
        <form action="{{ route('add-baner') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                    <div class="form-group">
                            <label for="exampleFormControlTextarea1">Aksia mövzusu</label>
                            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">
                    </textarea>
                    </div>               
            </div>
            <div class="input-group mb-3 input-add">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Yukle</span>
                    </div>
                    <div class="custom-file">
                      <input name="img" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
                      <label class="custom-file-label" for="inputGroupFile01">Şəkil seç</label>
                    </div>
            </div>

                <small id="emailHelp" class="form-text text-muted">Alavə elediyiniz aksia,aksiaların siyahında tapa bilərsuz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
