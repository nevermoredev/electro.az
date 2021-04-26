@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə Aksiyanı deyişdirə bilərsiniz</h3>
        <form action="{{ route('edit-baner',['id'=>$collection->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                
                <div class="input-add">
                        <input type="hidden" class="form-control" name="oldimg" value="{{ $collection->img }}">
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1">Aksia movzusu</label>
                                <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">
                                {{ $collection->text }}
                                </textarea>
                        </div>   
                </div> 
                <div class="older_image" >
                  <h5>Köhnə şəkil</h5>
                <img src="{{ asset('/img/carousel/'.$collection->img) }}" alt="old img">
                </div>
                <h5>Təzə şəkil</h5>
                <div class="input-group mb-3 input-add">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Yukle</span>
                        </div>
                        <div class="custom-file">
                          <input name="img" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
                          <label class="custom-file-label" for="inputGroupFile01">Şəkil seç</label>
                        </div>
                </div>

                <small id="emailHelp" class="form-text text-muted">Deyişdirdiniyiz aksia  ,aksiaların siyahında tapa bilərsiz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Deyişdir</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
