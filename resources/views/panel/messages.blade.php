@extends('main-panel')

@section('header')
    <div class="botom-head">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </nav>
              </div>
@endsection
@section('content')
            <h1>@dump($collection)</h1>
@endsection

@section('footer')
    
@endsection