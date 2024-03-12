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
    <section class="product-section">
        @foreach ($productes as $producte)
        <div id="item{{$producte->id}}" class="product">
            <h2 class="nom">{{ $producte->nom }}</h2>
            <p class="desc">{{ $producte->descripcio }}</p>
            <p class="preu">Preu: {{ $producte->preu }} €</p>
            <p class="estock">Estoc: {{ $producte->estoc }}</p>
            <div class="buttonContainer">
                <a class="veure" href="{{ route('productes.show', ['producte' => $producte->id]) }}">
                    <img src="{{ asset('/images/eye-solid.svg')}}" alt="Icono de ojo">Veure més
                </a>
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
        </div>
        @endforeach
    </section>
    <a href="{{ asset('css/app.css')}}"></a>
</body>

</html>