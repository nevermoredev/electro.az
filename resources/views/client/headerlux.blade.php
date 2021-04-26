  <header class="header"> 
      <div class="container"> 
        <div class="row row_align_center row_justify_between">
           <!-- LOGO -->
           <a class="logo_box" href="{{ route('luxhomeMain') }}">
            <img  style="width:120px;" class="icon icon-logo logo_ico lazyload blur_up" src="{{ asset('icons/luxhome1.svg') }}"></a>
          <!-- END LOGO -->
          <!-- SEARCH-->
          <form class="search_box"> 
            <input type="search" placeholder="Axtariş...">
            <button type="submit"> 
                  <svg class="icon icon-search search_ico lazyload blur_up">
                    <use xlink:href="{{ asset('./images/sprite/sprite.svg#search') }}"></use>
                  </svg>
            </button>
            <div class="search_box_result"> <a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="{{ asset('images/main/index/cat1.png') }}" alt="Search products category images">
                <h4 class="h4">iPhone XS MAX Pro </h4></a><a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="{{ asset('images/main/index/cat2.png') }}" alt="Search products category images">
                <h4 class="h4">iPad XS MAX Pro </h4></a><a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="{{ asset('images/main/index/cat3.png') }}" alt="Search products category images">
                <h4 class="h4">Xiaomi Laptop Max Pro</h4></a></div>
          </form>
          <!-- END SEARCH -->
          <!-- NAVIGATION-->
          <nav class="main_nav_menu"> 
            <!-- MAIN MENU -->
            @include('client.navlux')
            <!-- END MAIN MENU-->
            <!-- CALLBACK NUMBER-->
            <!-- END CALLBACK NUMBER -->
            <!-- MOBILE SEARCH-->
            <form class="search_mobile"> 
              <input type="search" placeholder="Axtariş...">
              <button type="submit"> 
                    <svg class="icon icon-search search_ico lazyload blur_up">
                      <use xlink:href="./images/sprite/sprite.svg#search"></use>
                    </svg>
              </button>
              <div class="search_box_result"> <a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="images/main/index/cat1.png" alt="Search products category images">
                  <h4 class="h4">iPhone XS MAX Pro </h4></a><a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="images/main/index/cat2.png" alt="Search products category images">
                  <h4 class="h4">iPad XS MAX Pro </h4></a><a class="search_box_result_row" href="#"> <img class="lazyload blur_up" data-src="images/main/index/cat3.png" alt="Search products category images">
                  <h4 class="h4">Xiaomi Laptop Max Pro</h4></a></div>
            </form>
            <!-- END SEARCH -->
          </nav>
          <!-- END NAVIGATION-->
          <!-- USER INTERFACE BTN-->
          <div class="user_interface">
          <a class="callback_link" href="tel: *0666"> 
                  <svg class="icon icon-call tel_ico lazyload blur_up">
                    <use xlink:href="./images/sprite/sprite.svg#call"></use>
                  </svg>*0666</a>	
            <div class="lang_box"> 
              <select name="lang" onchange="alert('Digər dillərdə hələ mövcud deyil')"> 
                <option value="az">az</option>
                <option value="ru">ru</option>
                <option value="en">en</option>
              </select>
            </div>
            <div class="menu_hamburger"> <a href="#">
                    <svg class="icon icon-menu map_ico lazyload blur_up">
                      <use xlink:href="{{ asset('./images/sprite/sprite.svg#menu') }}"></use>
                    </svg></a></div>
            <div class="search_box_btn"><a href="#">
                    <svg class="icon icon-search map_ico lazyload blur_up">
                      <use xlink:href="{{ asset('./images/sprite/sprite.svg#search') }}"></use>
                    </svg></a></div>
          </div>
          <!-- END USER INTERFACE BTN-->
        </div>
      </div>
    </header>