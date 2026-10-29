@extends('layouts.app')
 
@section('contenido')
    @if ($libros->count() > 0)
        <table border="1">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Año de publicación</th>
            </tr>
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->anio_publicacion }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay libros registrados.</p>
    @endif
@endsection
