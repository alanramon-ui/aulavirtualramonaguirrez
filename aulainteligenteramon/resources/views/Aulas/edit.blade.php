@extends('layouts.app')

@section('content')
<h1>Editar Aula: {{ $aula->nombre }}</h1>

<form action="{{ route('aulas.update', $aula) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $aula->nombre) }}" required>
    </div>
    <div class="mb-3">
        <label>Lugar</label>
        <input type="text" name="lugar" class="form-control" value="{{ old('lugar', $aula->lugar) }}" required>
    </div>
    <div class="mb-3">
        <label>Capacidad</label>
        <input type="number" name="capacidad" class="form-control" value="{{ old('capacidad', $aula->capacidad) }}" min="1" required>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection