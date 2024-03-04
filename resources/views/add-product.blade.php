<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
    <title>Afegir producte</title>
</head>
<body>
    <div class="container">
        <h1>Afegir Nou Producte</h1>
        <form action="insertar_producto.php" method="post">
            <label for="nombre">Nom:</label><br>
            <input type="text" id="nombre" name="nombre" required><br>
            <label for="descripcion">Descripció:</label><br>
            <textarea id="descripcion" name="descripcion" required></textarea><br>
            <label for="foto">Foto (URL):</label><br>
            <input type="text" id="foto" name="foto"><br>
            <label for="precio">Preu:</label><br>
            <input type="number" id="precio" name="precio" min="0" step="0.01" required><br>
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" min="0" required><br><br>
            <input type="submit" value="Añadir Producto">
        </form>
    </div>
</body>
</html>
