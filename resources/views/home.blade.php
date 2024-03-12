<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="menu">
            <div class="title"><a href=""><h1>Gestor de Productos</h1></a></div>
            <div class="menu-items">
                <ul>
                    <li><a href="{{ route('productes.index') }}">Tienda</a></li>
                    <li><a href="{{ route('productes.create') }}">Crear</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </header>
    <a href="{{ asset('css/app.css')}}"></a>
</body>

</html>
