<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    @include('favicon')
    <link rel="apple-touch-icon" href="{{ asset('/images/main/favicon/apple-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main/lux.css') }}">
    <script src="https://kit.fontawesome.com/11336e6347.js" crossorigin="anonymous"></script>
  </head>
  <body>
  @include('client.headerlux')
    <main class="main"> 
      <!-- SECTION PRODUCTS SLIDER -->
      <section class="products"> 
        <div class="container"> 
          <div class="row row_justify_center">
            <div class="main_category_menu_btn"> 
              <h2 class="h2">
                    <svg class="icon icon-list filter_ico lazyload blur_up">
                      <use xlink:href="{{ asset('./images/sprite/sprite.svg#list') }}"></use>
                    </svg><span class="category-h2">Kategoriyalar </span>
              </h2>
            </div>
            <nav class="products_menu"> 
              <ul class="products_menu_main"> 
                <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a></li>
                <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a></li>
                <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a></li>
                <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a></li>
                <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a></li>
              </ul>
            </nav>
            <div class="products_slider">
              <div class="products_slider_items"> 
                <div class="products_slider_items_wrap"> <img src="{{ asset('images/main/index/slider/2.jpg') }}" alt="Electro company products">
                 {{--  <div class="slider_text_wrap">
                    <h4 class="h4"> Стиральная машина electrolux с фронтальной загрузкой</h4>
                  </div> --}}
                </div>
              </div>
              <div class="products_slider_items"> 
                <div class="products_slider_items_wrap"> <img src="{{ asset('images/main/index/slider/2.jpg') }}" alt="Electro company products">
                 {{--  <div class="slider_text_wrap">
                    <h4 class="h4"> Стиральная машина electrolux с фронтальной загрузкой</h4>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION PRODUCTS SLIDER -->
      <!-- SECTION PRODUCTS CATEGORY -->
      <!-- END SECTION PRODUCTS CATEGORY -->
    </main>
    <!-- FOOTER-->
    <footer class="footer">
      <div class="container">
        <div class="row row_align_center">
         @include('client.sociallux')
          @include('client.copylux')
        </div>
      </div>
    </footer>
    <!-- END FOOTER-->
    <script src="{{ asset('js/scripts.min.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
  </body>
</html>