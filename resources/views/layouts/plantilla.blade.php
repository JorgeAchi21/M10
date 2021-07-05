<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Enlaces :</h1>
    <ul>
        <li><a href="/M1001/public/index.php">001 ir a home</a></li>
        <li><a href="/M1001/public/index.php/login">002 ir a login</a></li>
        <li><a href="/M1001/public/index.php/catalog">003 ir a catalog</a></li>
        <li><a href="/M1001/public/index.php/catalog/show/25">004 ir a show id: 25</a></li>
        <li><a href="/M1001/public/index.php/catalog/create">005 ir a create</a></li>
        <li><a href="/M1001/public/index.php/catalog/edit/25">006 ir a edit id: 25</a></li>
    </ul>

    @yield('content')

</body>
</html>