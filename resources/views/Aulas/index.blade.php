@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>📚 Nuestras Aulas</h2>
    <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">← Volver</a>
</div>

<div class="row g-4">
    @foreach($aulas as $aula)
<div class="col-md-4">
    <a href="{{ route('aulas.show', $aula) }}" class="text-decoration-none">
        <div class="card card-aula h-100">
            <img src="https://via.placeholder.com/300x200/81C784/FFFFFF?text={{ urlencode($aula->nombre) }}" class="card-img-top" alt="{{ $aula->nombre }}">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $aula->nombre }}</h5>
                <p class="text-muted">Capacidad: {{ $aula->capacidad }} personas</p>
                <button class="btn btn-verde mt-2">Ver detalles</button>
            </div>
        </div>
    </a>
</div>
@endforeach