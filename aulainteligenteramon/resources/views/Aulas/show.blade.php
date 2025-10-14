@extends('layouts.app')

@section('content')
<h1>Detalles del Aula</h1>

<div class="card">
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $aula->nombre }}</p>
        <p><strong>Lugar:</strong> {{ $aula->lugar }}</p>
        <p><strong>Capacidad:</strong> {{ $aula->capacidad }}</p>
    </div>
</div>

<a href="{{ route('aulas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
