<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/appMy.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="container mt-3" >
        <div>
            <h1> {{ $title }} <h1>
            {{ $slot }}
        </div>
    </div>
</body>
</html>