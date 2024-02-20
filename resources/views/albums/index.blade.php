@extends('layouts.master')
@section('content')
    <h1>Albumes</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre del album</th>
                <th>Año de lanzamiento</th>
                <th>Nombre del artista</th>
                <th>Enlace para ver canciones del album</th>
                <th>Número de canciones</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <td>{{ $album->name }}</td>
                    <td>{{ $album->year }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="{{ route('album.destroy', $album) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar album" class="bg-red-300">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
