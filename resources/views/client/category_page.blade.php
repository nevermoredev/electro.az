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
    <main class="main_cat_page">
      <!-- SECTION PRODUCTS CATEGORY -->
      <section class="cat_page_offset">
        <div class="container"> 
          <div class="row row_justify_center">
            <div class="products_category_col"><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat1.png" alt="Search products category images">
                  <h4 class="h4">телефоны</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat2.png" alt="Search products category images">
                  <h4 class="h4">планшеты</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat3.png" alt="Search products category images">
                  <h4 class="h4">компьютеры</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat4.png" alt="Search products category images">
                  <h4 class="h4">фототехника </h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat5.png" alt="Search products category images">
                  <h4 class="h4">телевизоры</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat6.png" alt="Search products category images">
                  <h4 class="h4">аудиотехника		 </h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat7.png" alt="Search products category images">
                  <h4 class="h4">часы</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat8.png" alt="Search products category images">
                  <h4 class="h4">бытовая техника	</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat9.png" alt="Search products category images">
                  <h4 class="h4">малая бытовая техника</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat10.png" alt="Search products category images">
                  <h4 class="h4">игры и развлечения					</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat11.png" alt="Search products category images">
                  <h4 class="h4">климатическая техника </h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat12.png" alt="Search products category images">
                  <h4 class="h4">мебель</h4>
                </div><a class="products_category_box" href="#"> 
                  <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat1.png" alt="Search products category images">
                    <h4 class="h4">телефоны</h4>
                  </div></a><a class="products_category_box" href="#"> 
                  <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat2.png" alt="Search products category images">
                    <h4 class="h4">планшеты				 </h4>
                  </div></a></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat3.png" alt="Search products category images">
                  <h4 class="h4">компьютеры</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat4.png" alt="Search products category images">
                  <h4 class="h4">фототехника</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat5.png" alt="Search products category images">
                  <h4 class="h4">телевизоры</h4>
                </div></a><a class="products_category_box" href="#"> 
                <div class="products_category_box_wrap"><img class="lazyload blur_up" data-src="images/main/index/cat6.png" alt="Search products category images">
                  <h4 class="h4">аудиотехника</h4>
                </div></a></div>
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
    <script src="js/scripts.min.js" defer></script>
    <script src="js/main.min.js" defer></script>
  </body>
</html>