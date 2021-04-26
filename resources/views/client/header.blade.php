
  <header class="header">
      <div class="container">
        <div class="row row_align_center row_justify_between">
           <!-- LOGO --><a class="logo_box" href="/">
                <svg class="icon icon-logo logo_ico lazyload blur_up">
                  <use xlink:href="{{ asset('./images/sprite/sprite.svg#logo') }}"></use>
                </svg></a>
          <!-- END LOGO -->
          <!-- SEARCH-->       
          <form class="search_box" action="{{ route('search') }}" method="post">
           <meta name="csrf-token" content="{{ csrf_token() }}">
          <input type="search" name="search_field" placeholder="Axtarış..." minlength="3" value="">
          @csrf
            <button type="submit" class="search_btn_main">
                  <svg class="icon icon-search search_ico lazyload blur_up">
                    <use xlink:href="{{ asset('./images/sprite/sprite.svg#search') }}"></use>
                  </svg>
            </button>
            <div  class="search_box_result" id="search_box_result_id"> 
                  
                  <div id="search_box_result_box_id">
                    


                  </div>
                 <div style="cursor: pointer" class="search_box_result_row color_electro ">Hamısına bax</div>

                  
                  </div>
                  
          </form>
          <!-- END SEARCH -->
          <!-- NAVIGATION-->
          <nav class="main_nav_menu">
            <!-- MAIN MENU -->
            @include('client.nav')
            <!-- END MAIN MENU-->
            <!-- CALLBACK NUMBER-->
            <!-- END CALLBACK NUMBER -->
            <!-- MOBILE SEARCH-->
            <form class="search_mobile" action="{{ route('search')}}"  method="post">
                <input type="text"  name="search_field_mobile"   minlength="3" value="" placeholder="Axtarış...">
                @csrf
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <button type="submit">
                      <svg class="icon icon-search search_ico lazyload blur_up">
                        <use xlink:href="{{ asset('./images/sprite/sprite.svg#search') }}"></use>
                      </svg>
                </button>
                <div class="search_box_result" id="search_box_result_id">
                      
                      <button class="search_box_result_row">Hamısına bax</button>
                    </div>
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
