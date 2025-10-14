@extends('layouts.app')

@section('content')
<h1>Detalles del Sistema</h1>

<div class="card">
    <div class="card-body">
        <p><strong>Aula:</strong> {{ $sistema->aula->nombre }} ({{ $sistema->aula->lugar }})</p>
        <p><strong>Temperatura:</strong> {{ $sistema->temperatura ?? 'No definida' }} °C</p>
        <p><strong>Iluminación:</strong> {{ $sistema->iluminacion ?? 'No definida' }} %</p>
        <p><strong>Calidad del Aire:</strong> {{ $sistema->calidad_del_aire ?? 'No definida' }}</p>
        <p><strong>Posición de Ventanas:</strong> {{ $sistema->posicion_ventanas ?? 'No definida' }}</p>
        <p><strong>Altura:</strong> {{ $sistema->altura ?? 'No definida' }} m</p>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('sistemas.index') }}" class="btn btn-secondary">Volver</a>
    <a href="{{ route('sistemas.edit', $sistema) }}" class="btn btn-warning">Editar</a>
</div>
@endsection