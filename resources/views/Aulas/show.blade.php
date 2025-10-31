@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🏫 {{ $aula->nombre }}</h2>
    <a href="{{ route('aulas.index') }}" class="btn btn-sm btn-outline-secondary">← Volver a Aulas</a>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Características del aula:</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Capacidad:</strong> {{ $aula->capacidad }} personas</li>
                    <li class="list-group-item"><strong>Focos:</strong> {{ $aula->cantidad_focos }}</li>
                    <li class="list-group-item"><strong>Cortinas:</strong> {{ $aula->cantidad_cortinas }}</li>
                    <li class="list-group-item"><strong>Sillas:</strong> {{ $aula->cantidad_sillas }}</li>
                    <li class="list-group-item"><strong>Mesas:</strong> {{ $aula->cantidad_mesas }}</li>
                    <li class="list-group-item"><strong>Aire acondicionado:</strong> {{ $aula->tiene_aire_acondicionado ? 'Sí' : 'No' }}</li>
                </ul>
            </div>
        </div>

        {{-- Formulario de reporte de cambios --}}
        <div class="card mt-4">
            <div class="card-header">
                <h5>🔧 Reportar cambio en el aula</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('aulas.reportar-cambio', $aula) }}">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-5">
                            <select name="tipo_cambio" class="form-select" required>
                                <option value="">Seleccionar...</option>
                                <option value="foco">Foco</option>
                                <option value="cortina">Cortina</option>
                                <option value="silla">Silla</option>
                                <option value="mesa">Mesa</option>
                                <option value="aire">Aire acondicionado</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" required>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-verde w-100">Reportar</button>
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea name="descripcion" class="form-control" placeholder="Descripción opcional"></textarea>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>¿Quieres reservar esta aula?</h5>
                <a href="{{ route('reservas.create', $aula) }}" class="btn btn-verde w-100 mt-2">📅 Reservar Ahora</a>
            </div>
        </div>
    </div>
</div>
@endsection