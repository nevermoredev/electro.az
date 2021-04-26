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
<div class="container-table">
  <table class="table">
  <div class="table-panel">    <a href="{{ route('add-baner') }}"><button class="btn-info">Təzə {{ $title }} alavə et</button></a></div>        
      <thead class="thead" id="blue-table">
        <tr>
        <th scope="col">Deyişdir </th>
          <th class="id" scope="col">İD</th>
          <th scope="col">Mövzu</th>
          <th scope="col">Şəkil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($collection as $item)
              <td id="edit_btn">
                  <a href="{{ route('edit-baner',['id'=>$item->id]) }}"><button class="btn-warning">Deyişdir</button></a>
              <a href="{{ route('delete-baner',['id'=>$item->id]) }}"><button class="btn-danger">Sil</button></a>
              </td>
              <th scope="row">{{ $item->id }}</th>
              <td id="textfield">{{ $item->text }}</td>
            <td><img class="action_img" src="{{ asset('./img/carousel/'.$item->img) }}" alt="action images"></td>
      </tr>
          @endforeach 
      </tbody>
    </table>
</div>
@endsection

@section('footer')
    
@endsection