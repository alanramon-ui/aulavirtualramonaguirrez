@extends('layouts.app')

@section('content')
<h1>Crear Aula</h1>

<form action="{{ route('aulas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Lugar</label>
        <input type="text" name="lugar" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Capacidad</label>
        <input type="number" name="capacidad" class="form-control" min="1" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('aulas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection