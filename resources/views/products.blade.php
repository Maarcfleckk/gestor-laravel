<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Llista de Productes</h1>
    @foreach ($productes as $producte)
        <h2>{{ $producte->nom }}</h2>
        <p>{{ $producte->descripcio }}</p>
        <p>{{ $producte->preu }} €</p>
        <p>Estoc: {{ $producte->estoc }}</p>
        <button>Eliminar</button>
        <button>Modificar</button>
    @endforeach
</body>
</html>