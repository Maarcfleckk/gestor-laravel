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
        <div class="product">
            <h2>Producto 1</h2>
            <div class="product-info">
                <img src="{{ asset('images/favicon.png')}}" alt="Descripción de la imagen" class="imagen">
                <div class="product-description">
                    <p>Descripción del producto 1.</p>
                    <p>Precio: <span id="precio">10,99€</span></p>
                    <p>Stock: <span id="stock1">10</span> 
                        <button onclick="aumentarStock('stock1')">+</button>
                        <button onclick="eliminarProducto('stock1')">-</button>
                    </p>
                </div>a
            </div>
            <button class="editar">Editar producto</button>
        </div>
        <div class="product">
            <h2>Producto 1</h2>
            <div class="product-info">
                <img src="{{ asset('images/favicon.png')}}" alt="Descripción de la imagen" class="imagen">
                <div class="product-description">
                    <p>Descripción del producto 1.</p>
                    <p>Precio: <span id="precio">10,99€</span></p>
                    <p>Stock: <span id="stock1">10</span> 
                        <button onclick="aumentarStock('stock1')">+</button>
                        <button onclick="eliminarProducto('stock1')">-</button>
                    </p>
                </div>
            </div>
            <button class="editar">Editar producto</button>
        </div>
        <div class="product">
            <h2>Producto 1</h2>
            <div class="product-info">
                <img src="{{ asset('images/favicon.png')}}" alt="Descripción de la imagen" class="imagen">
                <div class="product-description">
                    <p>Descripción del producto 1.</p>
                    <p>Precio: <span id="precio">10,99€</span></p>
                    <p>Stock: <span id="stock1">10</span> 
                        <button onclick="aumentarStock('stock1')">+</button>
                        <button onclick="eliminarProducto('stock1')">-</button>
                    </p>
                </div>
            </div>
            <button class="editar">Editar producto</button>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
