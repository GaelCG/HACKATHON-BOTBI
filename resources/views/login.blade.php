<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Botbi</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Login</h1>
                <label for="email">Correo</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
