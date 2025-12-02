<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aulas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --verde-oscuro: #2E7D32;
            --verde-medio: #81C784;
            --verde-fondo: #E8F5E9;
            --verde-texto: #1B5E20;
        }
        body {
            background-color: var(--verde-fondo);
            color: var(--verde-texto);
            font-family: 'Segoe UI', sans-serif;
        }
        .btn-verde {
            background-color: var(--verde-oscuro);
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(46,125,50,0.2);
        }
        .btn-verde:hover {
            background-color: #1B5E20;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(46,125,50,0.3);
        }
        .card-modulo {
            transition: all 0.3s ease;
            border: 1px solid #c8e6c9;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        .card-modulo:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 16px rgba(46,125,50,0.25);
            border-color: var(--verde-medio);
        }
        .card-modulo .card-body {
            padding: 1.5rem;
        }
        .card-modulo h3 {
            font-weight: 700;
            color: var(--verde-oscuro);
            margin-bottom: 0.8rem;
        }
        .navbar-brand {
            font-weight: bold;
            color: var(--verde-oscuro) !important;
            font-size: 1.4rem;
        }
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        footer {
            background-color: white;
            margin-top: 4rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">🏫 Sistema de Aulas</a>
            <div class="d-flex">
                <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">Inicio</a>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        @yield('content')
    </main>

    <footer class="text-center py-4 text-muted">
        <small>© 2025 Sistema de Aulas - Todos los derechos reservados</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>