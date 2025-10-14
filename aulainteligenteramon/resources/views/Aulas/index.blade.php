@extends('layouts.app')
@section('content')
<h1>Aulas</h1>

<a href="{{ route('aulas.create') }}" class="btn btn-primary mb-3">Crear Aula</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Capacidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($aulas as $aula)
        <tr>
            <td>{{ $aula->nombre }}</td>
            <td>{{ $aula->lugar }}</td>
            <td>{{ $aula->capacidad }}</td>
            <td>
                <a href="{{ route('aulas.show', $aula) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('aulas.edit', $aula) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('aulas.destroy', $aula) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection