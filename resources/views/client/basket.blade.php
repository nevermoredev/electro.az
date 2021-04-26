<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title> {{$title}} </title>
    <meta content="" name="webskyus">
    <meta content="" name="this is description">
    <meta content="" name="website, landing">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <link rel="icon" href="{{ asset('./images/main/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('./images/main/favicon/apple-icon-180x180.png') }} ">
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
      <link rel="stylesheet" href="{{ asset('styles/main/panel.css') }}">
       <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
  </head>
  <body>
    @include('client.header')
    <main class="main_products">

      <!-- BASKET-->
      <section class="basket">
        <div class="container">
          <div class="row row_justify_center">
            <form class="basket_wrap" method="post" action="{{ route('feedback') }}">
                @csrf
              <div class="basket_wrap_title">
                <h1 class="h2">Malın rəsmiləşdirilməsi </h1>
              </div>
              <!-- BASKET REGISTRATION -->
              <div class="bakset_reg_user">
                <input name="mount" type="hidden" value="{{request('mount')}}">
                  <input type="hidden" name="id" value="{{$collection->id}}">
                  <input type="hidden" name="type" value="{{$collection->type}}">
                  <input type="hidden" class="price_js" name="price" value="{{$collection->price}}">
                <input type="hidden" class="percent_js" name="percent_js" value="{{$percent}}">
                <input type="hidden" value="{{$collection->name}}" name="product">
                  <input type="hidden" value="Baxılmiyıb" name="status">
                <h4 class="basket_subtitle">Məlumatlarınızı daxil edin</h4>
                <div class="bakset_reg_user_row">
                  <input type="text" name="fio" placeholder="Ad Soyad*" required>
                </div>
                <div class="bakset_reg_user_row">
                  <input pattern="0[0-9]{9}" type="tel" name="number" placeholder="Telefon nömrəsi  (055-051-050-070-077-060) *" required>
                </div>
                <div class="bakset_reg_user_row">
                  <input type="text" name="address" placeholder="Ünvan *" required>
                </div>
                <div class="bakset_reg_user_row">
                  <textarea name="commit" placeholder="Şərh:"></textarea>
                </div>
                <div class="bakset_reg_user_row">
                  {{-- <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Подписаться на рассылку акций и новостей</span>
                  </div> --}}
                </div>
              </div>
              <!-- END BASKET REGISTRATION -->
              <!-- BASKET PAYING -->
              <div class="basket_user_pay">
                <h4 class="basket_subtitle">Ödəmə üsulunu seçin:</h4>
                <div class="basket_user_paying_row">
                  <div class="filter_checkbox_wrap">
                    <input id="cash" name="buymethod"  value="Nağd" type="radio"><span>Nağd</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input id="visa" name="buymethod" value="Visa | MasterCard" type="radio" ><span>Visa | MasterCard</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input id="bolkart" name="buymethod" value="Bolkart | Birkart" type="radio"><span>Bolkart | Birkart</span>
                  </div>
                   @if($percent == 'Nağd')
                    <p>Salam</p>

                    @else
                    <div class="basket_user_paying_row basket_user_paying_loyalty_system">
                      <p class="basket_subtitle">Müştərinin alış-verişlərinin sayı</p>
                      <div class="filter_checkbox_wrap filter_radio_wrap">
                        <input type="radio" name="personbuy" checked value="0"><span>İlk alış</span>
                      </div>
                      <div class="filter_checkbox_wrap filter_radio_wrap">
                        <input type="radio" name="personbuy" value="5"><span>İkinci alış</span>
                      </div>
                      <div class="filter_checkbox_wrap filter_radio_wrap">
                        <input type="radio" name="personbuy" value="8"><span>Üçüncü alış və ya daha çox</span>
                      </div>
                    </div>
                     @endif
                </div>

                <div class="basket_user_pay_total_row">
                  <p class="text"> <span>Ümumi dəyəri: </span><span class="total_basket_price"> <span class="total_price_count_js">@if($mount = 'Nağd')
                          {{$collection->price}}
                       @else
                          {{round($collection->price + ($collection->price/100*$percent) + ($collection->price/100*$collection->comision))}}
                        @endif
                      </span><span>AZN</span></span></p>
                  <button class="general_btn" type="submit">SİFARİŞ</button>
                </div>
              </div>
              <!-- END BASKET PAYING -->
              <!-- BASKET PRODUCTS -->
              <div class="basket_products">
                <h4 class="basket_subtitle">{{$typical_title->title}} </h4>
                <div class="basket_products_row">
                <h4 class="h4">{{ $collection->brand }}</h4>
                  <h3 class="h3">{{$collection->name}}</h3>
                </div>
                <div class="category_filtering_content_thumb"> <img class="lazyload blur_up" data-src="@if($collection->img){{ asset('img/products/'.$collection->type.'/'.$collection->img) }}  @else{{ asset('img/products/default.png') }} @endif" alt="Electro company products"></div>
                <div class="basket_products_price_row">
                  {{-- <div class="basket_products_count">
                    <p class="text">КОЛИЧЕСТВО:</p>
                    <div class="basket_products_count_wrap">
                      <input type="number" name="products_item" value="1" min="1" max="10">
                      <p class="text">шт. </p>
                    </div>
                  </div> --}}
                  <div class="basket_products_price">
                    <div class="basket_products_price_col">
{{--                      <p class="text_title">Qiymət: </p>--}}
{{--                      <p class="text basket_main_price">{{$collection->price}}</p>--}}
                      <p class="text basket_main_price" style="display: none">  <span class="total_main_price_count_js">@if($mount == 'Nağd')
                            {{$collection->price}}
                          @else
                            {{round($collection->price + ($collection->price/100*$percent) + ($collection->price/100*$collection->comision))}}
                          @endif</span><span>AZN </span></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END BASKET PRODUCTS -->
              <!-- END BASKET PRODUCTS -->
            </form>
          </div>
        </div>
      </section>
      <!-- END BASKET-->
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
