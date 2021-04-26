<!DOCTYPE html>
<html lang="az">
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="" name="webskyus">
    <meta content="" name="this is description">
    <meta content="" name="website, landing">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
     @include('favicon')
    <link rel="apple-touch-icon" href="{{ asset('./images/main/favicon/apple-icon-180x180.png') }}">
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
      <!-- SECTION SINGLE PRODUCTS-->
      <section class="single_products">
        <div class="container">
            @if (session('status'))
                <div class="modal_general" id="video_modal_box" style="display: block">
                    <div class="video_modal_box_wrap">
                        <div class="video_modal_container">
                            <p class="text">{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            @endif
          <div class="row row_justify_between">
            <!-- PRODUCTS SLIDER-->
            <div class="single_products_slider">
              <div class="single_products_slider_main">
                <div class="single_products_slider_items" data-slick-index="0">
                  <div class="single_products_slider_items_wrap"> <img class="lazyload blur_up" data-src="@if($collection->img){{ asset('img/products/'.$collection->type.'/'.$collection->img) }}  @else{{ asset('img/products/default.png') }} @endif" alt="Electro company products"></div>
                </div>
              </div>
              <div class="single_products_slider_nav">
                <button class="general_btn modal_open_btn" data-toggle-modal="#video_modal_box" data-video-src="@if($collection->video != null or $collection->video != '') @endif">Məhsul haqqinda video</button>
              </div>
            </div>
            <!-- END PRODUCTS SLIDER-->
            <!-- PRODUCTS DESCRIPTION-->
            <div class="single_products_description">
                <div class="single_products_description_row">
                <h5 class="h5"> Brend </h5>
                <p class="text"> {{$collection->brand}} </p>
              </div>
              @foreach ($atr as $val)
              @php $atributes =  $val->atr; @endphp
                    @if($val->atr != 'comision')
                        @if ($collection->$atributes !== null)

                            <div class="single_products_description_row">
                                <h5 class="h5"> {{$val->name}} </h5>

                                <p class="text"> {{$collection->$atributes}} </p>
                            </div>
                        @endif
                    @endif

              @endforeach
            </div>
            <!-- END PRODUCTS DESCRIPTION-->
            <!-- PRODUCTS OFFER-->
            <div class="single_products_offer_wrap">
                <form method="post" action="{{route('buy',['type'=>$collection->type,'id'=>$collection->id])}}">
                    @csrf
                <div class="single_products_offer">
                  <div class="single_products_offer_row">
                    <div class="single_products_offer_col">
                        <h3 class="h3"> {{$collection->name}} </h3>
                    </div>
                    <div class="single_products_offer_col">
                        @if ($collection->status != '' or $collection->status != null)
                            <p class="price_now"> {{$collection->price-$collection->status}} AZN</p>
                            <p class="text"><s> {{$collection->price}} AZN</s></p>
                            @else
                            <p class="price_now" > {{$collection->price}} AZN</p>
                            @endif
                    </div>
                  </div>
                  <div class="single_products_offer_edge_row">
                    <div class="single_products_offer_edge">
                          <svg class="icon icon-card edge_ico">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#card') }}"></use>
                          </svg>
                      <div class="single_products_offer_text">
                        <p class="text">Kredit və nağd satış.</p>
                      </div>
                    </div>
{{--                    <div class="single_products_offer_edge">--}}
{{--                          <svg class="icon icon-refund edge_ico">--}}
{{--                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#refund') }}"></use>--}}
{{--                          </svg>--}}
{{--                          <p class="text">14 gün ərzində malların qaytarılması.</p>--}}
{{--                    </div>--}}
                    <div class="single_products_offer_edge">
                          <svg class="icon icon-like edge_ico">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#like') }}"></use>
                          </svg>
                          <p class="text">Zəmanət {{$collection->waranty}} ay.</p>
                    </div>

                      @if($collection->comision != 0)
                          <div class="single_products_offer_edge">
                              <svg class="icon icon-card edge_ico">
                                  <use xlink:href="{{ asset('./images/sprite/sprite.svg#refund') }}"></use>
                              </svg>
                              <div class="single_products_offer_text">
                                  <p class="text">Məhsul nisyə satılan zaman rəsmiləşdirilməsi üçün 5-8% xidmət haqqı əlavə olunacaq</p>
                              </div>
                          </div>
                          @endif
                  </div>

                    <div class="single_products_offer_edge_row">
                        <table style="width:100%;">
                            <tr>
                                <th colspan="4"><p class="text">Nağd</p> </th>
                            </tr>
                                <tr>
                                    <td>
                                        <div class="table_credit_radio">
                                            <input type="radio" name="credit_radio" value="Nağd" checked ><span> </span>
                                        </div>
                                    </td>
                                    <td>@if($collection->status) {{ round($collection->price-$collection->status)}} @else {{ round($collection->price)}} @endif AZN</td>
                                </tr>
                        </table>
                    </div>

                  <div class="single_products_offer_edge_row">
                    <table style="width:100%;">

                     @if($kreditmaket_id and $kreditmaket_id->id != 3)
                            <th colspan="4"><p class="text">Kredit</p></th>
                            <tr>
                                <th>N/a </th>
                                <th>Müddət (ay)</th>
                                <th>İlkin ödəniş (AZN)</th>
                                <th>Aylık ödəniş (AZN)</th>
                            </tr>
                            @for ($i = 2; $i < 37;  $i++)
                                @php
                                $key = 'ay_'.$i;
                                @endphp
                                @if($kreditmaket_id->$key !== null)
                                    <tr>
                                        <td>
                                            <div class="table_credit_radio">
                                                <input type="hidden" name="mount" value="{{$i}}">
                                                <input type="radio" name="credit_radio" value="{{$kreditmaket_id->$key}}"  ><span> </span>
                                            </div>
                                        </td>
                                        <td>{{$i}}</td>
                                        <td>
                                            @if ($collection->deposit)
                                                {{$collection->deposit}}
                                            @else
                                                0
                                            @endif</td>
                                        <td>
                                                @php
                                                    $pricenow  = $collection->price;

                                                @endphp
                                           
                                            @if($collection->deposit != null)
                                               @php
                                                    $pricenow  = $collection->price - $collection->deposit;

                                                @endphp
                                                {{ round(($pricenow + ($pricenow/100*$kreditmaket_id->$key))/$i,2) }}
                                            @else
                                                {{ round((($pricenow + $pricenow/100*$collection->percentkredit)-$collection->status)/$i,2) }}
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endfor
                         @else
                            <th colspan="4"><p class="text">Bu məhsulu nağd əldə edə bilərsiniz</p></th>
                         @endif
                    </table>
                  </div>
                </div>
                <div class="single_products_offer_edge_row"><button type="submit" class="single_products_buy_link" href=" {{ route('buy', ['type'=>$collection->type,'id'=>$collection->id]) }}  ">Sifariş et</button></div>
              </div>
              </form>
            <!-- END PRODUCTS OFFER-->
          </div>
        </div>
      </section>
      <!-- END SECTION SINGLE PRODUCTS -->
    </main>
    <!-- FOOTER-->
    <footer class="footer">
      <div class="container">
        <div class="row row_align_center">
          @include('client.social')
          <div class="footer_copyright">
            @include('client.copy')
          </div>
        </div>
      </div>
    </footer>


   <div id="video_modal_box">
      <div class="video_modal_box_wrap">
        <div class="video_modal_container">
          <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
      </div>
   </div>
@include('js')
     <script src="{{ asset('js/scripts.min.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
  </body>
</html>
