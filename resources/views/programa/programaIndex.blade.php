@extends('layouts.temp')
@section('contenido')
    <h1>Listado de programas</h1>

    <p>
        <a href="{{ route('programa.create') }}">Agregar programa</a>
    </p>

    <table border='1'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Calendario</th>
                <th>Folio</th>
                <th>Nombre</th>
                <th>Dependencia</th>
                <th>Titular</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- 
                Recorremos todos los registros de la variable 'programas' que le pasamos a la vista
                mediante el controlador y le asignamos una variable temporal 'programa'
            -->
            @foreach ($programas as $programa)
                <tr>
                    <td>{{ $programa->id }}</td>
                    <td>{{ $programa->calendario }}</td>
                    <td>{{ $programa->folio }}</td>
                    <td>
                        <a href="{{ route('programa.show', $programa->id) }}">{{ $programa->nombre }}</a>
                    </td>
                    <td>{{ $programa->dependencia }}</td>
                    <td>{{ $programa->titular }}</td>
                    <td>
                        <a href="{{ route('programa.edit', $programa) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection