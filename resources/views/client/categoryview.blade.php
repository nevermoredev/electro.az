
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main/panel.css') }}">
     <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
  </head>
  <body>
   @include('client.header')
    <main class="main_category">
        <!-- CATEGORY SECTION-->
        <section class="category"> 
            <div class="container">
                <div class="row row_align_start">
                    <!-- FILTERS-->
                    <div class="category_filtering_btn">
                        <h2 class="h2">
                            <svg class="icon icon-list filter_ico lazyload blur_up">
                      <use xlink:href="{{ asset('./images/sprite/sprite.svg#list') }}"></use>
                    </svg>Filterlər
                        </h2>
                    </div>
                    <form class="category_filter" action="{{route('categoryClient',['type'=>lcfirst($type)] )}}" method="post" >
                        @csrf
                        @if(request()->isMethod('post'))
                            @endif
                        <div class="category_filter_row">
                            <div class="filter_checkbox_wrap">
                                <button type="submit">Filter</button>
                            </div>

                            <div class="filter_name">
                                <h4 class="h4">Qiymətə görə </h4>
                            </div>
                            <div class="filter_price_wrap">
                                <div class="filter_price filter_price_from">
                                    <input name="minprice" id="minprice" type="number" value="{{$minprice}}" placeholder="Min AZN">
                                </div>
                                <div class="filter_price filter_price_to">
                                    <input name="maxprice" id="maxprice" type="number"  value="{{$maxprice}}" placeholder="Max AZN">
                                </div>
                            </div>
                        </div>
                        @foreach($filters_list as $filter)
                        <div class="category_filter_row">

                                @php
                                    $stage = app("App\Types\\$type");
                                    $collect = $stage->distinct()->get($filter->filtername);
                                    $filter_now = $filter->filtername;
                                    $filter_type = $filter->type;
                                @endphp

                                <div class="filter_name">
                                    <h4 class="h4">{{$filter->title}} </h4>
                                </div>
                                <div class="filter_checkbox">
                                @foreach($collect->sortBy($filter->filtername) as $value)

                                        @if($value->$filter_now !== null)
                                            @php
                                                $count = $all->where($filter->filtername,$value->$filter_now)->count();
                                            @endphp
                                            
                                        <div class="filter_checkbox_wrap">
                                            <input class="checkbox" type="checkbox" name="{{$filter->filtername}}[]" value="{{$value->$filter_now}}"
                                                     
                                            ><span>{{$value->$filter_now}} <span class="count">[ {{$count}} ]</span></span>
                                        </div>
                                        @endif
                                    @endforeach

                                </div>
  
                        </div>

                        @endforeach
                    </form>
                    <!-- END FILTERS-->
                    <!-- FILTERING CONTENT-->
                    <div class="category_filtering_content">
                        {{-- <div class="category_filtering_content_name">
                          <h2 class="h2">Apple</h2>
                        </div> --}}
                       @if (!$collection == null)
                          @foreach ($collection as $item)
                          <a class="category_filtering_content_wrap" href="{{ route('productClient', ['type' => $type,'id' => $item['id']]) }}">
                              @if ($item->status != '')
                              <div class="category_filtering_content_discount">
                                  <p class="text"> Endirim  {{ $item->status }} AZN</p>
                              </div>
                              @endif
                              <div class="category_filtering_content_thumb"><img class="lazyload blur_up" data-src="@if($item->img){{ asset('img/products/'.$item->type.'/'.$item->img) }}  @else{{ asset('img/products/default.png') }} @endif" alt="Electro company products"></div>
                                  <div class="category_filtering_content_text">
                                  <h5 class="h5"> {{$item->name}} </h5>
                                  <p class="text_descr"></p>
                                  </div>
                                  <div class="category_filtering_content_price">
                                  <div class="category_filtering_content_price_wrap">
                                      @if ($item->status != '' or $item->status != null)
                                      <p class="text"> {{$item->price-$item->status}} AZN</p>
                                      <p class="text_descr"><s> {{$item->price}} AZN</s></p>
                                      @else
                                      <p class="text" > {{$item->price}} AZN</p>
                                      <br>
                                      @endif
                                  </div>
                                  <div class="btn_buy_link" href="#">Baxış</div>
                                  </div>
                              </a>
                              @endforeach
                          @else
                              <h2>Bu bölmədə hecnə tapılmadı...</h2>
                              <div class="clearbox"></div>
                       @endif

                        <!-- PAGINATION-->
                        <div class="pagination">
                          {{-- {{ $collection->links() }} --}}
                          {{-- <ul>
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
                                      <use xlink:href="./images/sprite/sprite.svg#arrow"></use>
                                    </svg></a></li>
                          </ul> --}}
                        </div>
                        <!-- END PAGINATION -->
                      </div>
                      <!-- END FILTERING CONTENT-->
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