<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{-- {{ $title }} --}}Tezliklə...</title>
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
{{--     @include('client.header')--}}
    <main class="main">
        <!-- SECTION SECTION Contacts-->
        <section class="contacts">
            <div class="container">
                <div class="row row_justify_center">
                    <div class="contacts_wrap">
                        <div class="row">
                            @foreach ($collection as $item)
                            <div class="contacts_col">
                            <h2 class="contacts_title">Filial {{$item->filial}}</h2>
                                <h3 class="contacts_subtitle">
                                    Ünvan: {{$item->address}} |
                                    <a href="tel: +994512554451">Əlagə nömrəsi: {{$item->number}}</a>
                                </h3>
                                <div class="contacts_map_wrap">
                                   {!!$item->iframe!!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION Contacts-->
    </main>
    <!-- FOOTER-->
{{--    <footer class="footer">--}}
{{--        <div class="container">--}}
{{--            <div class="row row_align_center">--}}
{{--                @include('client.social')--}}
{{--                @include('client.copy')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
    <!-- END FOOTER-->

            <script>

      $(document).ready(function() {   

      $('.search_box input').on('keyup', function () {

        $('search_box_result').length = 0;

        if ($(this).val().length == 0) {

          $('.search_box_result').fadeOut()

        } else if($(this).val().length == 2 || $(this).val().length > 2){

          var search_field = $('input[name="search_field"]').val();

          var search_field_input = $('input[name="search_field"]');

          var search = '/ajax?search_field='+search_field;

          $('.search_box_result').fadeIn();

             var xhr =  $.ajax({

                headers: {

                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    },

              global: false,
              type: "POST",
              async:true,
              url:    '{{route('search')}}', 
              data: {search_field : search_field},  
              dataType: "json",
                            
        }).done(function(data){

            $('.search_box_result').html('');

             let collect;

                let collection = data;

                for (i = 0; i <= collection.length; i++) {

                 let collect = collection[i];

                  var type = collect['type'];
                  var id = collect['id'];
                  var img = collect['img'];
                  var name = collect['name'];

                      $('.search_box_result').append('<a class="search_box_result_row" href="/az/'+type+'/'+id+'"><img  src="http://electro/img/products/' + type + '/'+img+'" class="lazyload blur_up" alt="">' +name+ '</a>');

                }
        });

             
      }


      });

      ///Mobile


      $('.search_mobile input').on('keyup', function () {


        $('search_box_result').length = 0;

        if ($(this).val().length == 0) {

          $('.search_box_result').fadeOut()

        } else if($(this).val().length == 2 || $(this).val().length > 2){
          

          var search_field = $('input[name="search_field_mobile"]').val();

          var search_field_input = $('input[name="search_field"]');

          var search = '/ajax?search_field='+search_field;

          $('.search_box_result').fadeIn();

             var xhr =  $.ajax({

                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

              global: false,
              type: "POST",
              async:true,
              url:    '{{route('search')}}', //url страницы (action_ajax_form.php)
              data: {search_field : search_field},  // Сеарилизуем объект
              dataType: "json",
                            
        }).done(function(data){

            $('.search_box_result').html('');

             let collect;

                    let collection = data;

                for (i = 0; i <= collection.length; i++) {

                 let collect = collection[i];

                  var type = collect['type'];
                  var id = collect['id'];
                  var img = collect['img'];
                  var name = collect['name'];

                      $('.search_box_result').append('<a class="search_box_result_row" href="/az/'+type+'/'+id+'"><img  src="http://electro/img/products/' + type + '/'+img+'" class="lazyload blur_up" alt="">' +name+ '</a>');
                }
        });

             
      }


      });
    
  });
    </script>
    <script src="{{ asset('js/scripts.min.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
    <script src="{{ asset('js/maps.js') }}" defer></script>
</body>

</html>
