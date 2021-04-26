<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="" name="webskyus">
    <meta content="" name="this is description">
    <meta content="" name="website, landing">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
     @include('favicon')
    <link rel="apple-touch-icon" href="{{ asset('/images/main/favicon/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('./style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./styles/main/panel.css') }}">
     <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
  </head>
  <body>
    @include('client.header')
    @csrf
    <main class="main_products">
      <!-- SECTION ABOUT-->
      <section class="about_page">
        <div class="container">
          <div class="row row_justify_center">
            <!-- ABOUT DESCR-->
            <div class="about_descr">
                  <svg class="icon icon-logo about_logo lazyload blur_up">
                    <use xlink:href="{{ asset('./images/sprite/sprite.svg#logo') }}"></use>
                  </svg>
              <h1 class="h1">Letraset, французская компания литерность,популяризировал прохождение Lorem Ipsum в 1960-е годы с их сухим передаточных листов.</h1>
              <p class="text"> Пять столетий спустя Lorem Ipsum испытал всплеск популярности с выпуском сухого переноса листов Letraset в. Эти листы надписи можно потереть на любом месте и были быстро приняты художники-графики, принтеры, архитекторов и рекламодателей для их профессионального вида и простоты использования. Letraset включены Lorem Ipsum проходы в арсеналом шрифтов, стилей и размеров, затвердевание место Латинского-эск фразу целиком в печатной и графической индустрии. Те, с вниманием к деталям будет даже поймали дань классического текста в эпизоде Mad Men (S6E1 вокруг 1:18:55 для тех, кто не сделал).</p>
              <p class="text">По латыни профессор Richard McClintock - человек, которому приписывают открытие корни Lorem Ipsum - он, скорее всего, что когда-то в средние века наборщиком вскарабкался часть Цицерона De Finibus для того, чтобы предоставить текст-заполнитель для смоделируйте различных шрифтов для типа образца книги. Но это было только начало.</p>
            </div>
            <!-- END ABOUT DESCR-->
            <!-- ABOUT WALL-->
            <div class="about_wall"> <img class="lazyload blur_up" data-src="{{ asset('images/main/about/1.png') }}" alt="Electro Az About Page"></div>
            <!-- END ABOUT WALL-->
          </div>
        </div>
      </section>
      <!-- END SECTION ABOUT-->
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
@include('js')
    <script src="{{ asset('js/scripts.min.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
  </body>
</html>
