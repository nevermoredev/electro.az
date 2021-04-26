@extends('main-panel')

@section('header')
        <table class="table">
            <div class="table-panel">
            <thead class="thead" id="blue-table">
            <tr>
                <th>Edit/Delete</th>
                <th scope="col">Adı</th>
                @for($i = 2; $i < 37; $i++)
                    <th scope="col">{{$i}}</th>
                    @endfor
            </tr>
            </thead>
            <tbody>

                @foreach($collection as $item)
                    <tr>
                        <th>
                            <a href="{{ route('edit-percentkredit',['id'=>$item->id]) }}"><button class="btn-warning">Deyişdir</button></a>
                            <a href="{{ route('delete-percentkredit',['id'=>$item->id]) }}"><button class="btn-danger">Sil</button></a>
                        </th>
                        <th>{{$item->name}}</th>
                        @for($i = 2; $i < 37; $i++)
                        @php
                        $key = 'ay_'.$i;
                        @endphp
                            <th>{{$item->$key}}</th>
                        
                        
                        @endfor 
                        </tr>
                @endforeach


            </tbody>
            </div>
        </table>
@endsection
@section('content')
@endsection

@section('footer')

@endsection