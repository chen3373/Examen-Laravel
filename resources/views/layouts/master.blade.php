<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de tu Aplicación</title>
</head>
<body>
    <header>

        <h1>Encabezado de la Aplicación</h1>
    </header>

    <nav>

        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('artist.index') }}">Listado de artistas</a></li>
            <li><a href="{{ route('album.index') }}">Listado de albunes</a></li>
            <li><a href="{{ route('song.index') }}">Listado de canciones</a></li>

        </ul>
    </nav>

    <main>

        @yield('content')
    </main>

    <footer>
        <p>Minghai Chen Examen-Laravel</p>
    </footer>
</body>
</html>
