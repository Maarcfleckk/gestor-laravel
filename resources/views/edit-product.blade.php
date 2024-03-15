<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>Editar Producto</title>
</head>
<body>
    <header>
        <div class="headerContainer">
            <nav class="navBar">
                <ul class="navBarList">
                    <li class="listItem"><a href="{{ route('productes.index') }}">Productes</a></li>
                    <li class="listItem"><a href="{{ url('/') }}"><h1 class="title">Inici</h1></a></li>
                    <li class="listItem"><a href="{{ route('productes.create') }}">Afegir</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <h2>Editar Producto</h2>

        <form method="POST" action="{{ route('productes.update', ['id' => $producte->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $producte->nom }}" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required>{{ $producte->descripcio }}</textarea>

            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="{{ $producte->preu }}" required>

            <label for="stock">Stock:</label>
            <input type="number" name="stock" value="{{ $producte->estoc }}" required>

            <label for="imagen">Imagen Actual:</label>            
            <img src="{{ asset('storage/'.$producte->imagen.'') }}" alt="Imagen del producto"> <!-- Mostrar la imagen del producto -->


            <label for="nueva_imagen">Seleccionar nueva imagen:</label>
            <input type="file" name="nueva_imagen">

            <button type="submit">Actualizar Producto</button>
        </form>
    </main>


    <a href="{{ asset('css/app.css') }}"></a>
</body>
</html>
