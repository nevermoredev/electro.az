<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('favicon')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/main/panel.css') }}">

<title>{{$title}}</title>
</head>
<body>
    <div class="wrapper">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="header-main">
                <ul class="nav" id="nav-top">
                        <li class="nav-item">
                          <a class="nav-link" @if ($title === "Sifarişlər") {!! 'id="unactive"'!!} @endif href="{{ route('order') }}">Sifarişlər  <span class="badge badge-light">@if(isset($unchecked)) {{  $unchecked }} @endif</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"@if ($title === "Əsas informasiya"){!! 'id="unactive"'!!}@endif href="{{ route('edit-info') }}">Əsas informasiya</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" @if ($title === "Social linklər") {!! 'id="unactive"'!!} @endif href="{{ route('social') }}">Social linklər</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" @if ($title === "Xaritələr") {!! 'id="unactive"'!!} @endif href="{{ route('maps') }}">Xəritələr</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" @if (isset($producttype)) {!! 'id="unactive"'!!} @endif href="{{ route('viewProduct',['category'=>'gadjet','type'=>'smartphone']) }}">Məsullar</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" @if ($title === "Baner") {!! 'id="unactive"'!!} @endif href="{{ route('baner') }}">Baner</a>
                        </li>
                        @if (Auth::user()->role == 'Administrator')
                        <li class="nav-item">
                            <a class="nav-link active" @if ($title === "İstfadəcilər") {!! 'id="unactive"'!!} @endif href="{{ route('users') }}">İstfadəcilər</a>
                          </li>
                        @endif
                        {{-- <li class="nav-item">
                          <a class="nav-link active" @if ($title === "Mesajlar") {!! 'id="unactive"'!!} @endif href="{{ route('messages') }}">Mesajlar <span class="badge badge-light">9</span></a>
                        </li> --}}
                        <li class="nav-item">
                          <a class="nav-link active" @if ($title === "Profilim") {!! 'id="unactive"'!!} @endif href="{{ route('edit-profile') }}">Profilim</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link active" @if ($title === "Kredit") {!! 'id="unactive"'!!} @endif href="{{ route('view-percentkredit') }}">Kredit</a>
                    </li>
                         <li class="nav-item">
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle btn-sm main-btn-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Əlavə
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('add-role') }}">Alavə rol</a>
                                <a class="dropdown-item" href="{{ route('addAtr') }}">Alavə atr</a>
                                <a class="dropdown-item" href="{{ route('addTypeMenu') }}">Alavə tip</a>
                                <a class="dropdown-item" href="{{ route('add-brend') }}">Alavə brend</a>
                                  <a class="dropdown-item" href="{{ route('add-percentkredit') }}">Alavə kredit şablonu et</a>
                              </div>
                            </div>
                        </li>
                        <li>
                             <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('giris') }}">{{ __('Giris') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown " style="float:right; margin-left:150px; ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <img class="profileicon" src=" {{ asset('img/default/profile.png')}} " alt=""> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right"aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                        </li>

                </ul>
        </div>
    <!-- Header begin -->
@yield('header')
    <!-- Header end -->

    <!-- Content begin -->
@yield('content')
    <!-- Content end -->

    <!-- Footer begin -->
@yield('footer')
    <!-- Footer end -->
    </div>

    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
