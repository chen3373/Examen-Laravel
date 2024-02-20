@extends('layouts.master')
@section('content')
    <h1>Canciones</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre de la cancion</th>
                <th>Duración</th>
                <th>Orden en el álbum</th>
                <th>Nombre del álbum</th>
                <th>Nombre del artista</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->name }}</td>
                    <td>{{ $song->duration }}</td>
                    <td>{{ $song->order }}</td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
