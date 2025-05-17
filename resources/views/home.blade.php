<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Centro Vida Plena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <div class="dashboard-header">
        <h1>Bienvenido, {{ $paciente->nombre }} {{ $paciente->apellido }}</h1>
        <p>Centro Hospitalario Vida Plena</p>
    </div>

    <div class="dashboard-section">
        <h2 style="text-align:center;">Resumen de tu información</h2>
        <div class="grid">
            <div class="stat-box">
                <div class="stat-number">{{ $totalCitas ?? 0 }}</div>
                <div class="stat-title">Citas Programadas</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $totalDoctores ?? 0 }}</div>
                <div class="stat-title">Profesionales Disponibles</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">{{ $citasHoy ?? 0 }}</div>
                <div class="stat-title">Atenciones Hoy</div>
            </div>
        </div>
    </div>

    <div class="dashboard-section">
        <h2 style="text-align:center;">Tu Próxima Cita</h2>
        @if(isset($proximaCita))
            <p><strong>Especialista:</strong> {{ $proximaCita->doctor->nombre }}</p>
            <p><strong>Fecha:</strong> {{ $proximaCita->fecha }}</p>
            <p><strong>Hora:</strong> {{ $proximaCita->hora }}</p>
        @else
            <p style="text-align:center; color: #555;">No tienes citas próximas.</p>
        @endif
    </div>

    <div class="dashboard-section" style="text-align:center;">
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="btn btn-primary">
            Cerrar sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>

</body>
</html>
