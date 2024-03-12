<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
    <title>Afegir producte</title>
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
    <div class="container">
        <h2>Afegir Nou Producte</h2>
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nombre">Nom:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="descripcion">Descripció:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </div>
            <div>
                <label for="precio">Preu:</label>
                <input type="number" id="precio" name="precio" min="0" step="0.01" required>
            </div>
            <div>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" name="stock" min="0" required>
            </div>
            <div class="file-upload">
                <label for="imagen" class="file-label">Seleccionar Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" required>
            </div>
            <input type="submit" value="Añadir Producto">
        </form>
    </div>
</body>
</html>
