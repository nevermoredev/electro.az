<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{-- {{ $title }} --}}Tezliklə...</title>
    <meta content="" name="webskyus">
    <meta content="" name="this is description">
    <meta content="" name="website, landing">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
     @include('favicon')
    <link rel="apple-touch-icon" href="{{ asset('./images/main/favicon/apple-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main/lux.css') }}">
</head>

<body>
    @include('client.headerlux')
    <main class="main">
        <!-- SECTION SECTION Contacts-->
        <section class="contacts">
            <div class="container">
                <div class="row row_justify_center">
                    <div class="contacts_wrap">
                        <div class="row">
                            <div class="contacts_col">
                                <h2 class="contacts_title">Filial «Əhmədli»</h2>
                                <h3 class="contacts_subtitle">
                                    Ünvan: 13 Sarayeva, Baki |
                                    <a href="tel: +994512554451">Əlagə nömrəsi: +994 51 255 44 51</a>
                                </h3>
                                <div class="contacts_map_wrap">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d903.4989867049235!2d49.9617099307821!3d40.38677602228017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33913bdc2a37a0ac!2sElectrolux-1!5e0!3m2!1sru!2s!4v1577367417602!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION Contacts-->
    </main>
    <!-- FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row row_align_center">
                @include('client.social')
                @include('client.copy')
            </div>
        </div>
    </footer>
    <!-- END FOOTER-->
    <script src="{{ asset('js/scripts.min.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
    <script src="{{ asset('js/maps.js') }}" defer></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7pt3oUuARFgTl3Pphbo5iN-91rIAm50s&amp;callback=initMap"></script>
</body>

</html>