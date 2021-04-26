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
  <div class="table-panel"> <a href="{{ route('add-role') }}"><button class="btn-info">Təzə rol alavə et</button><a href="{{ route('add-user') }}"><button class="btn-info">Təzə {{ $title }} alavə et</button></a></div>        
      <thead class="thead" id="blue-table">
        <tr>
        <th scope="col">Rolu deyişdir</th>
          <th class="id" scope="col">İD</th>
          <th scope="col">E-Mail</th>
          <th scope="col">Rolu</th>
          <th scope="col">ASAA</th>
          <th scope="col">Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($collection as $item)
              <td>
                  <a href="{{ route('edit-role',['id'=>$item->id]) }}"><button class="btn-warning">Rolu deyişdir</button></a><br>
                  <a href="{{ route('delete-user',['id'=>$item->id]) }}"><button class="btn-danger">Istifadəcini sil</button></a>
              </td>
              <td>{{ $item->id }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->role }}</td>
              <td>{{ $item->fio }}</td>
              <td>{{ $item->name }}</td>
      </tr>
          @endforeach 
      </tbody>
    </table>
</div>
@endsection

@section('footer')
    
@endsection