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
      <div class="title">Gestor de Productos</div>
      <div class="menu-items">
        <ul>
          <li><a href="#">Tienda</a></li>
          <li><a href="#">Filtrar</a></li>
          <li><a href="#">Crear</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </header>
    @foreach ($productes as $producte)
        <div id="item{{$producte->id}}" class="product">
            <h2>{{ $producte->nom }}</h2>
            <p>{{ $producte->descripcio }}</p>
            <p>{{ $producte->preu }} €</p>
            <p>Estoc: {{ $producte->estoc }}</p>
            <a href="productes/?{{ $producte }}">Veure més</a>
            <a href="">Editar</a>
            <a href="">Eliminar</a>
        </div>
    @endforeach
    <a href="{{ asset('css/app.css')}}"></a>
</body>
</html>