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
    <link rel="apple-touch-icon" href="{{ asset('./images/main/favicon/apple-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main/panel.css')}}">
     <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
  </head>
  <body>
    @include('client.header')
    <main class="main_category">
      <!-- CATEGORY SECTION-->
      <section class="search">
        <div class="container">
          <div class="row row_align_start">
            <!-- FILTERING CONTENT-->
            <div class="category_filtering_content">
                @if(request()->search_field =='')

                <div class="clearbox">
                    <h2>Hecnə yazmamisuz...</h2>
                </div>
             @elseif(!$collection->isEmpty())

             @foreach ($collection as $item)
                <a class="category_filtering_content_wrap" href="{{ route('productClient', ['type'=>$item->type,'id'=>$item->id]) }}">
                    @if ($item->status != null)
                    <div class="category_filtering_content_discount">
                        <p class="text">Endirim {{$item->status}} AZN</p>
                        </div>
                    @endif
                    <div class="category_filtering_content_thumb"><img class="lazyload blur_up" data-src="@if($item->img){{ asset('img/products/'.$item->type.'/'.$item->img) }}  @else{{ asset('img/products/default.png') }} @endif" alt="Electro company products"></div>
                    <div class="category_filtering_content_text">
                    <h5 class="h5">{{ $item->name }}</h5>
                    <p class="text_descr"></p>
                    </div>
                    <div class="category_filtering_content_price">
                    <div class="category_filtering_content_price_wrap">
                      @if($item->status)
                        <p class="text"> {{$item->price-$item->status}} AZN </p>
                        <p class="text_descr">{{$item->price}} AZN </p>
                      @else
                          <p class="text"> {{$item->price}} AZN </p>
                      @endif
                        
                    </div>
                    <div class="btn_buy_link" href="#">Baxiş</div>
                    </div>
                </a>
                @endforeach
                {{-- <div class="clearbox">
                </div> --}}
             @elseif($collection->isEmpty())
                <div class="clearbox">
                    <h2>Hecnə tapılmadı...</h2>
                </div>
             @endif
                </div>
              <!-- PAGINATION-->
              {{-- <div class="pagination">
                <ul>
                  <li class="prev_content_page"> <a href="#">
                          <svg class="icon icon-arrow pag_ico  lazyload blur_up">
                            <use xlink:href="./images/sprite/sprite.svg#arrow"></use>
                          </svg></a></li>
                  <li class="active_content_page"> <span>1 </span></li>
                  <li> <a href="#">2 </a></li>
                  <li> <a href="#">3 </a></li>
                  <li> <a href="#">4</a></li>
                  <li> <a href="#">5</a></li>
                  <li> <a href="#">6</a></li>
                  <li> <a href="#">7</a></li>
                  <li> <span>...</span></li>
                  <li> <a href="#">21</a></li>
                  <li class="next_content_page"> <a href="#">
                          <svg class="icon icon-arrow pag_ico lazyload blur_up">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow') }}"></use>
                          </svg></a></li>
                </ul>
              </div> --}}
              <!-- END PAGINATION -->
            </div>
            <!-- END FILTERING CONTENT-->
          </div>
        </div>
      </section>
      <!-- END CATEGORY SECTION-->
    </main>
    <!-- FOOTER-->
    <footer class="footer footer_category">
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
