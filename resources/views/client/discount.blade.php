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
    <link rel="stylesheet" href="{{ asset('styles/main/panel.css') }}">
     <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
</head>

<body>
   @include('client.header')
    <main class="main_discount">
        <!-- SECTION PRODUCTS CATEGORY -->
        <section class="discount_page discount_page_offset">
            <div class="container">
                <div class="row">
                    <div class="products_category_col">
                        <div class="products_category_slider">
                           @foreach ($collection as $key=> $item)

                           @php
                                $var =  $key%2;
                           @endphp
                               @if ($var == 0)
                               <div class="products_category_slider_items">
                                <div class="products_category_slider_items_wrap">
                                    <a class="products_category_box" href="{{ route('productClient', ['type'=>$item->type,'id'=>$item->id]) }}">
                                        <div class="category_filtering_content_discount">
                                        <p class="text"> Endirim  {{ $item->status }} AZN</p>
                                        </div>
                                        <div class="products_category_box_wrap"><img src="{{ asset('img/products/'.$item->type.'/'.$item->img) }}" alt="Search products category images">
                                            <h4 class="h4">{{ $item->name }}</h4>

                                        </div>
                                        <h3 class="price_numberic"> {{$item->price-$item->status}} AZN</h3>
                                    </a>
                              @else
                              <a class="products_category_box"href="{{ route('productClient', ['type'=>$item->type,'id'=>$item->id]) }}">
                                <div class="category_filtering_content_discount">
                                    <p class="text"> Endirim  {{ $item->status }} AZN</p>
                                </div>
                                <div class="products_category_box_wrap"><img src="{{ asset('img/products/'.$item->type.'/'.$item->img) }}" alt="Search products category images">
                                    <h4 class="h4">{{ $item->name }}</h4>

                                </div>
                                <h3 class="price_numberic"> {{$item->price-$item->status}} AZN</h3>
                            </a>
                                </div>
                            </div>
                               @endif
                           @endforeach
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PRODUCTS CATEGORY -->
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
