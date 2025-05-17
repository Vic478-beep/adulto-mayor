<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Paciente</title>
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            padding: 40px;
            width: 400px;
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
        .form-group {
            margin-bottom: 15px;
        }
        .error-box {
            background-color: #f8d7da;
            color: #842029;
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .error-box ul {
            padding-left: 20px;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="centered-form-container">
        <div class="form-container">
            <div class="form-title">Registro de Paciente</div>

            @if ($errors->any())
                <div class="error-box">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="nombre" class="input-text" placeholder="Nombre" required><br>
                <input type="text" name="apellido" class="input-text" placeholder="Apellido" required><br>
                <input type="text" name="ci" class="input-text" placeholder="CI" required><br>
                <input type="text" name="telefono" class="input-text" placeholder="Teléfono"><br>
                <input type="text" name="direccion" class="input-text" placeholder="Dirección"><br>
                <input type="email" name="email" class="input-text" placeholder="Correo electrónico" required><br>
                <input type="password" name="password" class="input-text" placeholder="Contraseña" required><br>
                <input type="password" name="password_confirmation" class="input-text" placeholder="Confirmar Contraseña" required><br>
                <button type="submit" class="btn btn-primary btn-block" style="width: 100%;">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
