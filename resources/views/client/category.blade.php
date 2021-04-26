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
    <link rel="apple-touch-icon" href="./images/main/favicon/apple-icon-180x180.png">
    <link rel="stylesheet" href="style/main.min.css">
  </head>
  <body>
<div id="app">
   @include('client.header')
    <main class="main_category">
      <!-- CATEGORY SECTION-->
      <section class="category">
        <div class="container">
          <div class="row row_align_start">
            <!-- FILTERS-->
            <form class="category_filter">
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Цена </h4>
                </div>
                <div class="filter_price_wrap">
                  <div class="filter_price filter_price_from">
                    <input type="number" placeholder="Min Azn">
                  </div>
                  <div class="filter_price filter_price_to">
                    <input type="number" placeholder="Max Azn">
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Бренды </h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Xiaomi</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Samsung</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Nokia</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Apple</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Sony</span>
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Линейки </h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Samsung Galaxy A</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Samsung Galaxy S</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Xiaomi Redmi</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Xiaomi Mi</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>ZTE Blade</span>
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Оперативная память </h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>2 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>4 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>6 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>8 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>12 ГБ</span>
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Встроенная память </h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>8 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>16 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>32 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>64 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>128 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>256 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>512 ГБ</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>1 ТБ</span>
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Разрешение экрана</h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>все HD (720)</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Full HD (1080)</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Quad HD</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>Ultra HD (4K)</span>
                  </div>
                </div>
              </div>
              <div class="category_filter_row">
                <div class="filter_name">
                  <h4 class="h4">Диагональ экрана</h4>
                </div>
                <div class="filter_checkbox">
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>≤ 4.5"</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>4.6 – 5"</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>5.1 – 5.5"</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>5.6 – 6"</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>6.1 – 6.5"</span>
                  </div>
                  <div class="filter_checkbox_wrap">
                    <input type="checkbox"><span>> 6.5"</span>
                  </div>
                </div>
              </div>
            </form>
            <!-- END FILTERS-->
            <!-- FILTERING CONTENT-->
            <div class="category_filtering_content">
              <div class="category_filtering_btn">
                <h2 class="h2">
                      <svg class="icon icon-list filter_ico lazyload blur_up">
                        <use xlink:href="./images/sprite/sprite.svg#list"></use>
                      </svg>Фильтры
                </h2>
              </div>
              <div class="category_filtering_content_name">
                <h2 class="h2">Apple</h2>
              </div><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_discount">
                  <p class="text">10%</p>
                </div>
                <div class="category_filtering_content_thumb"> <img class="lazyload blur_up" data-src="images/main/category/2.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/2.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить			</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img class="lazyload blur_up" data-src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img class="lazyload blur_up" data-src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img class="lazyload blur_up" data-src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"> <img class="lazyload blur_up" data-src="images/main/category/2.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/2.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить		</div>
                </div></a><a class="category_filtering_content_wrap" href="#">
                <div class="category_filtering_content_thumb"><img src="images/main/category/1.png" alt="Electro company products"></div>
                <div class="category_filtering_content_text">
                  <h5 class="h5">Apple iPhone X </h5>
                  <p class="text_descr">3/64GB</p>
                </div>
                <div class="category_filtering_content_price">
                  <div class="category_filtering_content_price_wrap">
                    <p class="text">650 azn</p>
                    <p class="text_descr">87 azn / мес</p>
                  </div>
                  <div class="btn_buy_link" href="#">Купить			</div>
                </div></a>
              <!-- PAGINATION-->
              <div class="pagination">
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
                            <use xlink:href="./images/sprite/sprite.svg#arrow"></use>
                          </svg></a></li>
                </ul>
              </div>
              <!-- END PAGINATION -->
            </div>
            <!-- END FILTERING CONTENT-->
          </div>
        </div>
      </section>
      <!-- END CATEGORY SECTION-->
    </main>
</div>
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
    
    <script src="js/scripts.min.js" defer></script>
    <script src="js/main.min.js" defer></script>
    <script src="/js/app.js"></script>
  </body>
</html>
