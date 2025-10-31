<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Aulas</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizado -->
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
        }
        .btn-verde:hover {
            background-color: #1B5E20;
        }
        .card-aula {
            transition: transform 0.2s;
            border: 1px solid #c8e6c9;
        }
        .card-aula:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2);
        }
        .navbar-brand {
            font-weight: bold;
            color: var(--verde-oscuro) !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
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