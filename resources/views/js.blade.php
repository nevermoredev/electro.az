   
  @if(Route::currentRouteName() === 'categoryClient')
    <script>


        $('.category_filter').on('change',function(){

          var pushedInServerData = {};

          let formData = $('.category_filter').serializeArray();

          

          $.ajax({
            type:'post',
             headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            url: "{{route('categoryClient',['type'=>$type])}}",
            data: formData,
          }).done(function(data){
              $('.category_filtering_content_wrap').html('');

              console.log(data);

          });

          });
    </script>
  @endif
    <script>

      // 4. MAIN PAGE search 
      $(document).ready(function() {


         $('.color_electro').on('click', function () {

            var search_field = $('input[name="search_field"]').val();

            document.location.replace("{{route('search')}}");

            var btn = $('.search_btn_main');

            btn.click();

         });

        

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
              url:    '{{route('ajax')}}',
              data: {search_field : search_field},
              dataType: "json",
                            
        }).done(function(data){

            $('#search_box_result_box_id').html('');

             let collect;

                    let collection = data;

                for (i = 0; i <= collection.length; i++) {

                 let collect = collection[i];

                  var type = collect['type'];
                  var id = collect['id'];
                  var img = collect['img'];
                  var name = collect['name'];

                      $('#search_box_result_box_id').append('<a class="search_box_result_row" href="/az/'+type+'/'+id+'"><img  src="http://electro/img/products/' + type + '/'+img+'" class="lazyload blur_up" alt="">' +name+ '</a>');

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
              url:    '{{route('ajax')}}', 
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

      
    
  });


    </script>

