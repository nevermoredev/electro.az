    <script>

      // 4. MAIN PAGE search 
      $(document).ready(function() {

      $('.search_box input, .search_mobile input').on('keyup', function () {

        $('.search_box_result').html(' ');
        

        $('search_box_result').length = 0;

        if ($(this).val().length == 0) {
          $('.search_box_result').fadeOut()
        } else if($(this).val().length == 2 || $(this).val().length > 2){

          $('.search_box_result').html(' ');



          

          var search_field = $('input[name="search_field"]').val();

          var search_field_mobile = $('input[name="search_field_mobile"]').val();

          var search_field_input = $('input[name="search_field"]');

          var search = '/ajax?search_field='+search_field;

          $('.search_box_result').fadeIn();

             var xhr =  $.ajax({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

              global: false,
              type: "POST",
              url:    "{{ route('search') }}", //url страницы (action_ajax_form.php)
              data: {search_field : search_field,search_field_mobile : search_field_mobile},  // Сеарилизуем объект
              dataType: "json",
              cache:false,
              async:true,
              beforeSend:function(search_field){
                $('.search_box_result').html(' ');
              },
              success: function(data){
                $('.search_box_result').html(' ');

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

                

              },complate:function(){

               


              }

                
        });

              $('.search_box_result').append('<a class="search_box_result_row" href="'+search+'">Hamısına bax</a>')
      }
      });
    
  });
    </script>