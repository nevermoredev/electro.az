<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sifaris saytdan electro.az</title>
</head>
<body>
    <div style="min-width:320px;height: 250px; margin: 100px auto; text-align: left;">
        <h1>Sifariş nömrəsi: {{$number}}</h1>
        <table class="table_price" style="font-size: 14px; text-align: center; width: 100%; border-collapse: collapse;background: #252F48;">
            <tr>
                @foreach($template as $th)
                    <th style="color: #EDB749;border-bottom: 1px solid #37B5A5;padding: 12px 17px;">{{$th}}</th>
                    @endforeach
            </tr>
            <tr>
                @foreach($order as $td)
                    <th style="color: #EDB749;border-bottom: 1px solid #37B5A5;padding: 12px 17px;">{{$td}}</th>
                @endforeach
            </tr>
        </table>
        <div class="commit">
            <h1 style="width: auto;height: auto;text-align: center">Şərh</h1>
            <h4 style=" padding: 10px; width: auto;height: auto; background:#252F48; color: white;">{{$commit}}</h4>
        </div>
    </div>
</body>
</html>