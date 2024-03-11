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
    <h1>Editar Producto</h1>

    <form method="POST" action="{{ route('productes.update', ['id' => $producte->id]) }}">
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

        <button type="submit">Actualizar Producto</button>
    </form>

    <a href="{{ asset('css/app.css') }}"></a>
</body>
</html>
