<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">

    <title>Gestor de Productos</title>
</head>

<body>
    <div class="container">
        <h1>Gestor de Productos Laravel</h1>
        <button class="agregar">Agregar producto</button>
        <?php
        // Establecer la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "Ga258471";
        $database = "laravel";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta para obtener los productos de la base de datos
        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        // Mostrar los productos
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h2>" . $row['nombre'] . "</h2>";
                echo "<div class='product-info'>";
                echo "<img src='" . $row['foto'] . "' alt='Descripción de la imagen' class='imagen'>";
                echo "<div class='product-description'>";
                echo "<p>" . $row['descripcion'] . "</p>";
                echo "<p>Precio: <span id='precio'>" . $row['precio'] . "€</span></p>";
                echo "<p>Stock: <span id='stock'>" . $row['stock'] . "</span> 
                        <button onclick='aumentarStock(" . $row['id'] . ")'>+</button>
                        <button onclick='eliminarProducto(" . $row['id'] . ")'>-</button>
                      </p>";
                echo "</div>";
                echo "</div>";
                echo "<button class='editar'>Editar producto</button>";
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles.";
        }
        ?>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
