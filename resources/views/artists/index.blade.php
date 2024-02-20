<!-- resources/views/artists/index.blade.php -->
@extends('layouts.master')

@section('content')

    <h1>Artistas</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre del artista</th>
                <th>Enlace de sus álbumes</th>
                <th>Número de álbumes</th>
                <th>Número de canciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->name }}</td>
                    <td><a href="{{ route('artist.index', $artist->id) }}">Ver álbumes</a></td>
                    <td>{{ $artist->albums_count }}</td>
                    <td>{{ $artist->songs_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
