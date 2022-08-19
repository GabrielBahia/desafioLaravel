<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/appMy.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg nav-style">
        <a class="navbar-brand item-nav0" href="#">BomBom Da Lu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-style2">
                <a class="nav-item nav-link active item-nav" href="#">Produtos</a>
                <a class="nav-item nav-link item-nav" href="#">Estoque</a>
                <a class="nav-item nav-link item-nav" href="#">Clientes</a>
                <a class="nav-item nav-link item-nav2" href="#">Usuário</a>
                <a class="nav-item nav-link " href="#">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h1 class="title-style"> {{ $title }} </h1>
        <div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>