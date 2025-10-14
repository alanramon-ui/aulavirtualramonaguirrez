@extends('layouts.app')

@section('content')
<h1>Sistemas Inteligentes</h1>

<a href="{{ route('sistemas.create') }}" class="btn btn-primary mb-3">Crear Sistema</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Aula</th>
            <th>Temp (°C)</th>
            <th>Iluminación (%)</th>
            <th>Calidad Aire</th>
            <th>Ventanas</th>
            <th>Altura (m)</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sistemas as $sistema)
        <tr>
            <td>{{ $sistema->aula->nombre }}</td>
            <td>{{ $sistema->temperatura ?? '—' }}</td>
            <td>{{ $sistema->iluminacion ?? '—' }}</td>
            <td>{{ $sistema->calidad_del_aire ?? '—' }}</td>
            <td>{{ $sistema->posicion_ventanas ?? '—' }}</td>
            <td>{{ $sistema->altura ?? '—' }}</td>
            <td>
                <a href="{{ route('sistemas.show', $sistema) }}" class="btn btn-sm btn-info">Ver</a>
                <a href="{{ route('sistemas.edit', $sistema) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('sistemas.destroy', $sistema) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection