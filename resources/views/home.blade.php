@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="display-5 fw-bold" style="color: #2E7D32;">🏫 Sistema de Aulas Inteligentes</h1>
    <p class="lead mt-3 text-muted">Gestiona aulas, horarios, materias y más desde un solo lugar.</p>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <a href="{{ route('aulas.index') }}" class="text-decoration-none">
            <div class="card-modulo h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🪑</div>
                    <h3>Aulas</h3>
                    <p>Explora aulas disponibles, su capacidad y estado actual.</p>
                    <button class="btn btn-verde">Ver Aulas</button>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="{{ route('alumnos.create') }}" class="text-decoration-none">
            <div class="card-modulo h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">🎓</div>
                    <h3>Inscribirse</h3>
                    <p>Regístrate como estudiante para acceder a tus materias y reservas.</p>
                    <button class="btn btn-verde">Inscribirme</button>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="{{ route('materias.index') }}" class="text-decoration-none">
            <div class="card-modulo h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">📚</div>
                    <h3>Materias</h3>
                    <p>Consulta las materias disponibles y sus profesores asignados.</p>
                    <button class="btn btn-verde">Ver Materias</button>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="{{ route('horarios.index') }}" class="text-decoration-none">
            <div class="card-modulo h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">⏰</div>
                    <h3>Horarios</h3>
                    <p>Consulta tu cronograma de clases por día y hora.</p>
                    <button class="btn btn-verde">Ver Horarios</button>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-4">
        <a href="{{ route('aires.index') }}" class="text-decoration-none">
            <div class="card-modulo h-100">
                <div class="card-body text-center">
                    <div class="fs-1 mb-3">❄️</div>
                    <h3>Aires Acond.</h3>
                    <p>Control y estado de los sistemas de climatización por aula.</p>
                    <button class="btn btn-verde">Ver Estado</button>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="text-center mt-5">
    <small class="text-muted">¿Eres docente o administrador? <a href="#" class="text-decoration-none">Accede aquí</a></small>
</div>
@endsection