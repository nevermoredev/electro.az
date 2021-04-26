@extends('main-panel')

@section('header')
@endsection
@section('content')
<div class="container">
        @include('back')
    <div class="form-add">
        <h3>Bu səyfədə social link alavə edə bilərsiniz</h3>
        <form action="{{ route('add-social') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="input-add">
                        <input type="text" class="form-control" name="url" placeholder="Link">    
                </div> 
                <div class="input-add">
                        <input type="text" class="form-control" name="name" placeholder="Adı">    
                </div>

                <small id="emailHelp" class="form-text text-muted">Alavə social link,social linklərin siyahında tapa bilərsuz</small>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Alavə et</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('footer')

@endsection
