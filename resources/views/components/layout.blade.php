<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/appMy.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg nav-style">
        <a class="navbar-brand item-nav0 text-nav2" href="/index">BomBom Da Lu</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-style2">
                <a class="nav-item nav-link item-nav text-nav item-nav1" href="{{ route('products.index') }}">Produtos</a>
                <a class="nav-item nav-link item-nav text-nav item-nav2" href="{{ route('stocks.index') }}">Estoque</a>
                @can('view', Auth::user())
                    <a class="nav-item nav-link item-nav text-nav item-nav3" href="{{ route('users.index') }}">Usuários</a>
                @endcan    
                <div class="item-nav4 item-dentro"> 
                <a class="nav-item nav-link item-nav text-nav" href="{{ route('users.profile', Auth::user()->id) }}">Perfil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-item nav-link btn-logout-style item-nav text-nav">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h1 class="title-style"> {{ $title }} </h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div>
            {{ $slot }}
        </div>
    </div>

    <footer class="footer-style">
      <div class="text-footer">
        <strong>Copyright &copy; 2022 <a className={estilos.link} href="https://codejr.com.br" target="_blank">Code Jr</a>.</strong> Todos direitos
        reservados.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>