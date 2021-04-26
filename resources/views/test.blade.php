<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="csrf">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function funcBefore() {
            alert('Sending');
        }

        function funcSuccess(){
            return data;
        }
        $(document).ready(function(){
           $("#button_for_form").bind("click",function () {
               var data = 'dasdas';
               $.ajax({
                    url:'{{route("test")}}',
                   type: 'post',
                   data:data,
                   dataType:"html",
                   beforeSend:funcBefore,
                    success:funcSuccess,
               });
           });
        });
    </script>
</head>
<body>

    <div class="container">
        <form action="{{ route('test') }}" method="post">
            @csrf
            <p class="from-control"><span style="margin-right: 5px;">Samsung</span><input type="checkbox" name="brand[]" value="Samsung"></p>
            <p class="from-control"><span style="margin-right: 5px;">Xiaomi</span><input type="checkbox" name="brand[]" value="Xiaomi"></p>
            <p class="from-control"><span style="margin-right: 5px;">LG</span><input type="checkbox" name="brand[]" value="LG"></p>

            <p   id="button_for_form" class="btn btn-primary" style="cursor: pointer;height: 35px;width: 150px">Get</p>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
