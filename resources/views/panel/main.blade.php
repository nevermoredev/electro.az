@extends('main-panel')
@section('header')
    <div class="container-table">
      <table class="table">
      <div class="table-panel"></div>        
          <thead class="thead" id="blue-table">
            <tr>
            <th scope="col">Tarixı</th>
            <th scope="col">Statusu deyişdir</th>
              <th class="id" scope="col">İD</th>
              <th scope="col">Statusu</th>
              <th scope="col">Ad Soyad</th>
              <th scope="col">Ünvan</th>
              <th scope="col">Nomrə</th>
              <th scope="col">Məsul</th>
              <th scope="col">Kredit ayı</th>
                <th scope="col">Muştəri səviyəsi</th>
                <th scope="col">Odəmə</th>
                <th scope="col">Qiymət</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              
              @foreach ($collection as $item)
              @php
                      $time =  $item->created_at;
                  @endphp
              <td>{{ \Carbon\Carbon::parse($item->created_at)->toDateTimeString() }}</td>
                  <td>
                      <a href="{{ route('edit-order',['id'=>$item->id]) }}"><button class="btn-warning">Statusu deyişdir</button></a></td>
                  <th scope="row">{{ $item->id }}</th>
                  <td><div style="color:black; text-align: center;" @if ($item->status == 'Imtina')
                    class="alert alert-danger"
                  @elseif($item->status == 'Baxılmiyıb')
                    class="alert alert-dark"
                  @elseif($item->status == 'Baxılıb')
                    class="alert alert-warning"
                  @elseif($item->status == 'Satılıb')
                    class="alert alert-success"
                  @endif role="alert">
                    {{ $item->status }}
                      </div</td>
                  <td>{{ $item->fio }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->number }}</td>
                  <td>{{ $item->product }}</td>
                    <td>{{ $item->mount }}</td>
                    <td>{{ $item->personbuy }}</td>
                    <td>{{ $item->buymethod }}</td>
                    <td>{{ $item->price }}</td>
          </tr>
              @endforeach 
          </tbody>
        </table>
    </div>
@endsection
@section('content')
@endsection

@section('footer')
    
@endsection