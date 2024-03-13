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
    <section class="product-section">
        <div class="productsList">
            @foreach ($productes as $producte)
            <div id="item{{$producte->id}}" class="product">
            <div class="product-info">
                <h2 class="nom">{{ $producte->nom }}</h2>
                <p class="desc">{{ $producte->descripcio }}</p>
                <p class="preu">Preu: {{ $producte->preu }} €</p>
                <p class="estock">Estoc: {{ $producte->estoc }}</p>
                <form method="POST" action="{{ route('productes.destroy', ['id' => $producte->id]) }}" class="formBottons">
            <a class="veure" href="{{ route('productes.show', ['producte' => $producte->id]) }}">
                <img src="{{ asset('/images/eye-solid.svg')}}" alt="Icono de ojo">Veure més
            </a>
            <a class="editar" href="{{ route('productes.edit', ['id' => $producte->id]) }}">
                <img src="{{ asset('/images/pencil-solid.svg')}}" alt="Icono de lapiz">Editar
            </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="eliminar" onclick="return confirm('Segur que vols eliminar aquest producte?')">
                    <img src="{{ asset('/images/trash-regular.svg')}}" alt="Icono de lapiz">Eliminar
                </button>
            </form>
            </div>
            <div class="product-image">
                <img src="{{ asset('storage/'.$producte->imagen.'') }}" alt="Imagen del producto">
            </div>
            </div>
            @endforeach
        </div>
    </section>
    <a href="{{ asset('css/app.css')}}"></a>
</body>

</html>
