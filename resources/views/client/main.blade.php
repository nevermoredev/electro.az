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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('favicon')
    <link rel="apple-touch-icon" href="{{ asset('/images/main/favicon/apple-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('style/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/main/panel.css') }}">
    <script src="https://kit.fontawesome.com/11336e6347.js" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
  </head>
  <body>
  @include('client.header')
    <main class="main">
      <!-- SECTION PRODUCTS SLIDER -->
      <section class="products">
        <div class="container">
          <div class="row row_justify_center">
            <div class="main_category_menu_btn">
              <h2 class="h2">
                    <svg class="icon icon-list filter_ico lazyload blur_up">
                      <use xlink:href="{{ asset('./images/sprite/sprite.svg#list') }}"></use>
                    </svg>Kategoriyalar
              </h2>
            </div>
            <nav class="products_menu">
                <ul class="products_menu_main" >
                  <li class="products_menu_items products_menu_items_parent" id="margin-top-nav"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('/icons/gadjet.svg') }}" alt="Electro az category menu"><span class="cat-owned">Telefonlar və qadcetlər</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                      <li class="products_menu_items"  id="margin-top-nav" ><a href=" {{ route('categoryClient',['type'=>'smartphone']) }}">
                           Smartfonlar, mobil telefonlar</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'descphones']) }}">
                               Ev və ofis telefonları</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'tablet']) }}">
                              Planşetlər</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'watch']) }}">
                              Smart saatlar</a></li>

                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                           Digər</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3" >
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'headset']) }}">
                               Qulaqlıqlar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'screensaver']) }}">
                               Ekran qoruyucuları</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'phonesaver']) }}">
                               Telefon ücün keyslər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'watchak']) }}">
                              Smart saatlar üçün aksessuarlar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'powerbank']) }}">
                               Power Bank portativ akkumulyatorlar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'cable']) }}">
                               Adapterlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'usbaux']) }}">
                              USB və AUX kabellər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'memorycard']) }}">
                              Yaddaş kartı</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'selfie']) }}">
                              Selfi çubuqları və ştativlər</a></li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                  </li>

                  <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" src="{{ asset('icons/tv.svg') }}" alt="Electro az category menu"><span class="cat-owned">Televizorlar, audio-video</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2" >
                      <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'tv']) }}">
                          Televizorlar</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'hometheater']) }}">
                             Ev kinoteatrları</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'dvdblueray']) }}">
                            DVD və Blu-Ray</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'speakersystem']) }}">
                            Akustik sistemlər</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'projector']) }}">
                           Proyektorlar</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'audiosystem']) }}">
                           Musiqi mərkəzləri və maqnitofonlar</a></li>

                      {{-- <li class="products_menu_items products_menu_items_parent"><a href="#">
                           Digər</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items"><a href="#">
                               Kronşteyn və divar asılqanları</a></li>
                          <li class="products_menu_items"><a href="#">
                              Televizor pultları</a></li>
                          <li class="products_menu_items"><a href="#">
                               Stabilizatorlar</a></li>
                          <li class="products_menu_items"><a href="#">
                             Mikrofonlar</a></li>
                          <li class="products_menu_items"><a href="#">
                              Elektrik uzadıcı</a></li>
                        </ul>
                      </li> --}}
                      </li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent" > <a href="#"><img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/komp.svg') }}" alt="Electro az category menu"><span class="cat-owned">Noutbuklar və kompüterlər</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                      <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'notebook']) }}">
                          Noutbuklar</a></li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'monitor']) }}">
                             Monitorlar</a></li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                           Printer və digər qurğular</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'printer']) }}">
                               Printerlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'cartridge']) }}">
                              Kartriclər</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                           Kompüter aksesuarları</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'pcdevice']) }}">
                              Klaviatura və kompüter siçanları</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'externalmemor']) }}">
                              Xarici toplayıcı disklər HDD və SSD</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'modem']) }}">
                              Modemlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'flashstorage']) }}">
                               Fleş toplayıcı</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'notebag']) }}">
                               Noutbuk üçün çantalar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'webcam']) }}">
                               Veb kameralar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'presentationdevice']) }}">
                              Prezentasiya pultu</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'undernote']) }}">
                              Noutbuklar üçün altlıqlar</a></li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#"><img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/photo.svg') }}" alt="Electro az category menu"><span class="cat-owned">Foto və video</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2" >
                        <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'actioncam']) }}">
                            Ekşn kameralar</a></li>
                         <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'autocam']) }}">
                                 Videoqeydiyyatçılar</a></li>
                    <li class="products_menu_items products_menu_items_parent"><a href="{{ route('categoryClient',['type'=>'photocam']) }}">
                           Fotoaparatlar</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'photocam']) }}">
                            Qüzgülü fotoaparatlar</a></li>
                             <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'objectiv']) }}">
                                Obyektivlər</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                          Digər</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'tripod']) }}">
                               Ştativlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'cambatar']) }}">
                             Akkumulyatorlar və batareyalar</a></li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/beauty.svg') }}" alt="Electro az category menu"><span class="cat-owned">Gözəllik və sağlamlıq</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                       <li class="products_menu_items products_menu_items_parent" id="margin-top-nav"><a href="#">
                          Saç düzümü</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'hairdryer']) }}">
                              Fen və darağlı fenlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'hairstraightener']) }}">
                              Saç düzləndirici</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'electromasa']) }}">
                             Elektromaşa</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'multislayer']) }}">
                            Multistayler</a></li>
                        </ul>
                      </li>
                       <li class="products_menu_items products_menu_items_parent"><a href="#">
                         Üzqırxan və saçqırxan maşınlar</a>
                             <svg class="icon icon-arrow1 menu_arrow">
                              <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                            </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'electricrazor']) }}">
                             Elektrik üzqırxan</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'hairclipper']) }}">
                              Saç qırxan</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'trimmer']) }}">
                             Trimmerlər</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                         Şəxsi qulluq əşyaları</a>
                             <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'depilator']) }}">
                             Epilyatorlar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'manicureset']) }}">
                             Manikür üçün dəstlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'cosmeticmirror']) }}">
                             Kosmetik güzgülər</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'kidbeaut']) }}">
                          Uşaqlar üçün mallar</a></li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/smalldomestic.svg') }}" alt="Electro az category menu"><span class="cat-owned">Kiçik məişət texnikası</span></a>
                         <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                      <li class="products_menu_items products_menu_items_parent" id="margin-top-nav"><a href="#">
                        Mətbəx köməkçiləri</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'blender']) }}">
                             Blenderlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'kitchenscale']) }}">
                             Mətbəx tərəziləri</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'combine']) }}">
                             Mətbəx kombaynları</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'mixer']) }}">
                            Mikserlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'mincer']) }}">
                            Ətçəkən maşınlar</a></li>
                        </ul>
                      </li>
                       <li class="products_menu_items products_menu_items_parent"><a href="#">
                        Yemək hazırlanması</a>
                             <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'multibuser']) }}">
                            Multibişiricilər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'oven']) }}">
                            Mikrodalğalı sobalar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'breadmaker']) }}">
                           Çörək bişirən</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'dryingmachine']) }}">
                           Tərəvəz və meyvə qurudan</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'electricoven']) }}">
                          Elektrik sobalar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'toster']) }}">
                          Tosterlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'steamer']) }}">
                         Buxarlı bişiricilər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'fryer']) }}">
                         Fritozlar</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                       Qəhvə, şirə, içkilər</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'kettle']) }}">
                             Elektrik çaydanlar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'coffeedripping']) }}">
                             Qəhvə dəmləyən</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'coffeesleeper']) }}">
                             Qəhvə üyüdənlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'juicer']) }}">
                            Şirəçəkənlər</a></li>
                        </ul>
                      </li>
                      <li class="products_menu_items products_menu_items_parent"><a href="#">
                      Evə və geyimə qulluq</a>
                              <svg class="icon icon-arrow1 menu_arrow">
                                <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                              </svg>
                        <ul class="products_menu_main products_menu_lv3">
                          <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'iron']) }}">
                            Ütülər və ütüləmə masaları</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'saltwater']) }}">
                             Tozsoranlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'steamcleaner']) }}">
                            Buxarlı təmizləyicilər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'pressurewasher']) }}">
                            Yüksək təzyiqli yuyucular</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'mohaircleaning']) }}">
                          Tiftik təmizlənməsi</a></li>
                        </ul>
                      </li>
                    </ul>

                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#">  <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/domestic.svg') }}" alt="Electro az category menu"><span class="cat-owned">Böyük məişət texnikası</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                         <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'refrigerator']) }}">
                          Soyuducular</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'icecamera']) }}">
                           Dondurucu kameralar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'washingmachine']) }}">
                          Paltaryuyan maşınlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'dishwasher']) }}">
                          Qabyuyan maşınlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'aspirator']) }}">
                          Aspiratorlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'cookingpanel']) }}">
                          Bişirmə panelləri</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'stove']) }}">
                          Sobalar</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'electricstove']) }}">
                          Plitələr</a></li>
                    </ul>
                  </li>
                   <li class="products_menu_items products_menu_items_parent"> <a href="#">  <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/clima.svg') }}" alt="Electro az category menu"><span class="cat-owned">İqlim texnikası</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                         <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'combi']) }}">
                         Kombi</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'vent']) }}">
                          Ventilyatorlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'conditioner']) }}">
                          Kondisionerlər</a></li>
                          <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'oilradiator']) }}">
                          Yağ radiatorları</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'convector']) }}">
                          Konvektorlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'microclimat']) }}">
                         Mikroiqlim</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'heatingradiator']) }}">
                          Qızdırıcı radiatorlar</a></li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#"> <img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/game.svg') }}" alt="Electro az category menu"><span class="cat-owned">Oyun konsolları, oyunlar</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                      <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'sonyplaystation']) }}">
                         PlayStation 4</a></li>
                        <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'gamedisc']) }}">
                            Oyun diskləri</a></li>
                        <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'playstationvinil']) }}">
                            Vinillər PS</a></li>
                        <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'joystickcharge']) }}">
                            Şarj avadanlığı</a></li>
                    </ul>
                  </li>
                  <li class="products_menu_items products_menu_items_parent"> <a href="#"><img class="lazyload blur_up" id="cat-nav-icon" data-src="{{ asset('icons/pot.svg') }}" alt="Electro az category menu"><span class="cat-owned">Qab-qacaq</span></a>
                          <svg class="icon icon-arrow1 menu_arrow">
                            <use xlink:href="{{ asset('./images/sprite/sprite.svg#arrow1') }}"></use>
                          </svg>
                    <ul class="products_menu_main products_menu_lv2">
                        <li class="products_menu_items" id="margin-top-nav"><a href="{{ route('categoryClient',['type'=>'pan']) }}">
                            Qazanlar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'griddle']) }}">
                             Tavalar</a></li>
                            <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'thermos']) }}">
                                Termoslar</a></li>
                           <li class="products_menu_items"><a href="{{ route('categoryClient',['type'=>'knive']) }}">
                            Bıcaqlar</a></li>

                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            <div class="products_slider">
              @foreach ($baners as $baner)
              <div class="products_slider_items">
                <div class="products_slider_items_wrap"> <img src="{{ asset('/img/carousel/'.$baner->img) }}" alt="Electro company products">
                  <div class="slider_text_wrap">
                    @if ($baner->text != '')
                    <h4 class="h4"> {{$baner->text}}</h4>
                    @endif
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION PRODUCTS SLIDER -->
      <!-- SECTION PRODUCTS CATEGORY -->
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
