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
    <main>
        
    </main>
    <a href="{{ asset('css/app.css')}}"></a>
</body>

</html>
