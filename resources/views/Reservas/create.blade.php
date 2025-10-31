@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header text-center" style="background-color: #E8F5E9; color: #1B5E20;">
                <h4>📅 Reservar {{ $aula->nombre }}</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">Capacidad: {{ $aula->capacidad }} personas</p>

                <form method="POST" action="{{ route('reservas.store', $aula) }}">
                    @csrf
                    <input type="hidden" name="aula_id" value="{{ $aula->id }}">

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required min="{{ date('Y-m-d') }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_inicio" class="form-label">Hora de inicio</label>
                                <input type="time" class="form-control" id="hora_inicio" name="hora_inicio" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hora_fin" class="form-label">Hora de fin</label>
                                <input type="time" class="form-control" id="hora_fin" name="hora_fin" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="motivo" class="form-label">Motivo de la reserva</label>
                        <textarea class="form-control" id="motivo" name="motivo" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-verde w-100">Reservar Aula</button>
                </form>

                <div class="text-center mt-3">
                    <a href="{{ route('aulas.show', $aula) }}" class="btn btn-sm btn-outline-secondary">← Volver al aula</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection