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
    @include('client.header')
    <main class="main_products">
      <!-- SECTION SINGLE PRODUCTS-->
      <section class="single_products"> 
        <div class="container"> 
          <div class="row row_justify_between">
            <!-- PRODUCTS SLIDER-->
            <div class="single_products_slider">
              <div class="single_products_slider_main">
                <div class="single_products_slider_items" data-slick-index="0">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/1.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="1">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/2.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="2">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/3.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_items" data-slick-index="3">
                  <div class="single_products_slider_items_wrap"> <img src="images/main/products/4.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
              </div>
              <div class="single_products_slider_nav"> 
                <div class="single_products_slider_nav_items" data-slick-index="0">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/1.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="1">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/2.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="2">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/3.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
                <div class="single_products_slider_nav_items" data-slick-index="3">
                  <div class="single_products_slider_nav_items_wrap"> <img src="images/main/products/4.jpg" alt="Iphone 10 in electroAZ"></div>
                </div>
              </div>
              <div class="single_products_slider_color"> 
                <p class="text"> <span>Цвет: </span><span class="color_name">серебристый</span></p>
                <div class="single_products_slider_btn"> 
                  <div class="single_products_slider_btn_wrap"> 
                    <input type="radio" name="color" checked><span data-color-name="серебристый" style="background: #c0c0c0"></span>
                  </div>
                  <div class="single_products_slider_btn_wrap"> 
                    <input type="radio" name="color"><span data-color-name="серый" style="background: #666666"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- END PRODUCTS SLIDER-->
            <!-- PRODUCTS DESCRIPTION-->
            <div class="single_products_description"> 
              <div class="single_products_description_row"> 
                <h5 class="h5">Диагональ экрана, </h5>
                <p class="text">5.8 Дюймов</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Гарантия</h5>
                <p class="text">1 год</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Разрешение основной тыловой камеры</h5>
                <p class="text">12 Мпикс</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Встроенная память</h5>
                <p class="text"> 64 ГБ</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Размер оперативной памяти</h5>
                <p class="text"> 6 ГБ</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Емкость аккумулятора</h5>
                <p class="text"> 3600 мАч</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Разрешение экрана</h5>
                <p class="text"> Full HD (1080)</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Технология матрицы</h5>
                <p class="text"> OLED</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Число SIM-карт</h5>
                <p class="text"> 1</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Форм-фактор SIM</h5>
                <p class="text"> Nano-SIM</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Назначение слотов</h5>
                <p class="text"> SIM 1</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Беспроводные подключения</h5>
                <p class="text"> 3G , 4G , EDGE , LTE , NFC , Wi-Fi 802.11a/b/g/n , Wi-Fi 802.11ac</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Модуль связи Bluetooth</h5>
                <p class="text"> 5.0</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Операционная система</h5>
                <p class="text"> iOS</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Навигация</h5>
                <p class="text"> A-GPS , GPS , iBeacon , ГЛОНАСС</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Разъемы</h5>
                <p class="text"> Apple Lightning</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Функции камеры</h5>
                <p class="text"> Двойная камера</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Разрешение фронтальной камеры</h5>
                <p class="text"> 7 Мпикс</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Разрешение дополнительной тыловой камеры</h5>
                <p class="text"> 12 Мпикс</p>
              </div>
              <div class="single_products_description_row"> 
                <h5 class="h5">Материал корпуса</h5>
                <p class="text"> Стекло , Нержавеющая сталь</p>
              </div>
            </div>
            <!-- END PRODUCTS DESCRIPTION-->
            <!-- PRODUCTS OFFER-->
            <div class="single_products_offer">
              <div class="single_products_offer_row"> 
                <div class="single_products_offer_col"> 
                  <h3 class="h3">Смартфон Apple iPhone X 3/64GB, серебристый</h3>
                </div>
                <div class="single_products_offer_col"> 
                  <h4 class="h4">650 azn</h4>
                  <p class="text">87 azn / aya</p>
                </div>
              </div>
              <div class="single_products_offer_edge_row"> 
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-card edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#card"></use>
                      </svg>
                  <div class="single_products_offer_text"> 
                    <p class="text">Безопасная оплата: </p>
                    <p class="text">Наличными, банковской картой и еще 2 cпособа</p>
                  </div>
                </div>
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-refund edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#refund"></use>
                      </svg>
                  <p class="text">Возврат 14 дней</p>
                </div>
                <div class="single_products_offer_edge"> 
                      <svg class="icon icon-like edge_ico">
                        <use xlink:href="./images/sprite/sprite.svg#like"></use>
                      </svg>
                  <p class="text">Гарантия 1 год</p>
                </div>
              </div>
              <div class="single_products_offer_edge_row"> 
                <table>
                  <tr> 
                    <th>N/a </th>
                    <th>Периуд</th>
                    <th>Первоначалная плата (AZN)</th>
                    <th>Месячная плата (AZN)</th>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>6 Месяцев	</td>
                    <td>120	</td>
                    <td>90</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>9 Месяцев	</td>
                    <td>120	</td>
                    <td>65</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>12 Месяцев	</td>
                    <td>120	</td>
                    <td>55</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>15 Месяцев	</td>
                    <td>120	</td>
                    <td>40</td>
                  </tr>
                  <tr> 
                    <td> 
                      <div class="table_credit_radio">
                        <input type="radio" name="credit_radio"><span> </span>
                      </div>
                    </td>
                    <td>18 Месяцев	</td>
                    <td>120	</td>
                    <td>30</td>
                  </tr>
                </table>
              </div>
              <div class="single_products_offer_edge_row"><a class="single_products_buy_link" href="#">Купить </a></div>
            </div>
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
          <div class="footer_social"> <a href="#">
                  <svg class="icon icon-fb soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#fb"></use>
                  </svg></a><a href="#">
                  <svg class="icon icon-in soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#in"></use>
                  </svg></a><a href="#">
                  <svg class="icon icon-yt soc_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#yt"></use>
                  </svg></a></div>
          <div class="footer_copyright"> 
            <p class="text">copyright © 2019 all rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END FOOTER-->
    <script src="js/scripts.min.js" defer></script>
    <script src="js/main.min.js" defer></script>
  </body>
</html>