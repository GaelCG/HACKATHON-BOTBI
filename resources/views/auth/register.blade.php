<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Botbi</title>
    @vite(['resources/css/styles.css'])
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="{{ asset('images/botbi.png') }}" alt="Botbi Logo">
            </div>
            <h1>¡Regístrate!</h1>
            <p>Crea una cuenta para comenzar a usar Botbi.</p>

            <!-- Mostrar errores -->
            @if($errors->any())
                <div class="errors">
                    @foreach($errors->all() as $error)
                        <p class="error-message">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('process-register') }}" class="login-form">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Tu nombre completo" value="{{ old('name') }}" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example@domain.com" value="{{ old('email') }}" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Crea una contraseña" required>

                <label for="password_confirmation">Confirmar Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repite tu contraseña" required>
                

                <button type="submit" class="btn">Registrarse</button>
            </form>

            <div class="login-link">
                <p>¿Ya tienes una cuenta? <a href="{{ route('login-form') }}">Inicia sesión aquí</a></p>
            </div>
        </div>
        <div class="right-section">
            <h2>Únete a Botbi y transforma tu negocio</h2>
        </div>
    </div>
</body>
</html>
