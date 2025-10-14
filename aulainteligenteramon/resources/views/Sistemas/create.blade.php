@extends('layouts.app')

@section('content')
<h1>Crear Sistema para Aula</h1>

<form action="{{ route('sistemas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Aula <span class="text-danger">*</span></label>
        <select name="aula_id" class="form-control" required>
            <option value="">Seleccione una aula</option>
            @foreach($aulas as $aula)
                <option value="{{ $aula->id }}">{{ $aula->nombre }} ({{ $aula->lugar }})</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Temperatura (°C)</label>
        <input type="number" step="0.1" name="temperatura" class="form-control" value="{{ old('temperatura') }}">
    </div>
    <div class="mb-3">
        <label>Iluminación (%)</label>
        <input type="number" name="iluminacion" min="0" max="100" class="form-control" value="{{ old('iluminacion') }}">
    </div>
    <div class="mb-3">
        <label>Calidad del Aire</label>
        <input type="text" name="calidad_del_aire" class="form-control" value="{{ old('calidad_del_aire') }}">
    </div>
    <div class="mb-3">
        <label>Posición de Ventanas</label>
        <input type="text" name="posicion_ventanas" class="form-control" value="{{ old('posicion_ventanas') }}">
    </div>
    <div class="mb-3">
        <label>Altura (m)</label>
        <input type="number" step="0.01" name="altura" class="form-control" value="{{ old('altura') }}">
    </div>
    <button type="submit" class="btn btn-success">Guardar Sistema</button>
    <a href="{{ route('sistemas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection