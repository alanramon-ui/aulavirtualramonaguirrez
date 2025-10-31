@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold" style="color: #2E7D32;">Bienvenido al Sistema de Aulas</h1>
    <p class="lead mt-3">Gestiona tus reservas, consulta tus materias y mantén el estado de las aulas actualizado.</p>
</div>

<div class="row justify-content-center g-4">
    <div class="col-md-4">
        <a href="{{ route('aulas.index') }}" class="text-decoration-none">
            <div class="card card-aula h-100 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="card-title">📚 AULAS</h3>
                    <p class="card-text">Explora las aulas disponibles, sus características y reserva la que necesites.</p>
                    <button class="btn btn-verde">Ver Aulas</button>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="{{ route('alumnos.create') }}" class="text-decoration-none">
            <div class="card card-aula h-100 shadow-sm">
                <div class="card-body text-center">
                    <h3 class="card-title">🎓 INSCRIBIRSE</h3>
                    <p class="card-text">Regístrate como alumno para acceder a tus materias y reservar aulas.</p>
                    <button class="btn btn-verde">Inscribirme</button>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="text-center mt-5">
    <a href="#" class="btn btn-outline-secondary btn-sm">¿Eres administrador?</a>
</div>
@endsection