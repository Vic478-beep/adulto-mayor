<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Centro Vida Plena</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 40px;
            width: 360px;
            animation: transitionIn-Y-over 0.5s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .form-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            text-align: center;
            color: var(--primarycolor);
        }
    </style>
</head>
<body>
    <div class="centered-form-container">
        <div class="form-container">
            <div class="form-title">Iniciar Sesión</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div style="margin-bottom: 15px;">
                    <input type="email" name="email" class="input-text" placeholder="Correo electrónico" required>
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="password" name="password" class="input-text" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="width: 100%;">Ingresar</button>
            </form>
            <p style="margin-top: 15px; font-size: 14px; text-align: center;">
                ¿No tienes cuenta? <a href="{{ route('register') }}" class="non-style-link" style="color: var(--primarycolor);">Regístrate aquí</a>
            </p>
        </div>
    </div>
</body>
</html>
