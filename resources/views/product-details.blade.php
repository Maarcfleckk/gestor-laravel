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
          <div class="title"><a href="{{ url('/') }}"><h1>Gestor de Productos</h1></a></div>
          <div class="menu-items">
              <ul>
                  <li><a href="{{ route('productes.index') }}">Tienda</a></li>
                  <li><a href="{{ route('productes.create') }}">Crear</a></li>
              </ul>
          </div>
      </div>
      <hr>
  </header>
  <main>
    <section class="productContainer">
      <section class="productInfo">
        <div class="productTitle">
          <h2>{{ $producte->nom }}</h2>
        </div>
        <div class="productDescription">
          <p>{{ $producte->descripcio }}</p>
        </div>
        <div class="productPrice">
          <p>{{ $producte->preu }} €</p>
        </div>
        <div class="productStock">
          <p>Estoc: {{ $producte->estoc }}</p>
        </div>
        <div class="productButtons">
          <a class="editar" href="{{ route('productes.edit', ['id' => $producte->id]) }}">
            <img src="{{ asset('/images/pencil-solid.svg')}}" alt="Icono de lapiz">Editar
          </a>
          <form method="POST" action="{{ route('productes.destroy', ['id' => $producte->id]) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="eliminar" onclick="return confirm('Segur que vols eliminar aquest producte?')">
              <img src="{{ asset('/images/trash-regular.svg')}}" alt="Icono de lapiz">Eliminar
            </button>
          </form>
        </div>
      </section>
      <section class="productImage">
        <img src="{{ asset($producte->imagen) }}" alt="Imagen del producto">
      </section>
    </section>
  </main>
    <a href="{{ asset('css/app.css')}}"></a>
</body>
</html>