<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <h3>Enlaces :</h3>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item flex-fill"> <a href="/M1001/public/index.php">ir a home</a> </li>
        <li class="list-group-item flex-fill"> <a href="/M1001/public/index.php/login">ir a login/logout</a> </li>
        <li class="list-group-item flex-fill"> <a href="/M1001/public/index.php/catalog">ir a catalog</a> </li>
        <li class="list-group-item flex-fill"> <a href="/M1001/public/index.php/catalog/create">ir a create</a> </li>
    </ul>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Rincon de lectura</a>
        <span class="navbar-text">
            <?php
            use Illuminate\Support\Facades\Cookie;

            if (Auth::check()) {
                $usuario=Cookie::get('usuario');
                echo "Usuario logado: $usuario";
            } else {
                 echo "Usuario no logado :-(";
            }

            ?>
          </span>
    </nav>

    @yield('content')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>