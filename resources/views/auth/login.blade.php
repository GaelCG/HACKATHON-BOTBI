<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Botbi</title>
    @vite(['resources/css/styles.css'])
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="logo">
                <img src="{{ asset('images/botbi.png') }}" alt="Botbi Logo">
            </div>
            <h1>Empecemos</h1>
            <p>Bienvenido a Botbi, inicia sesión.</p>

            <!-- Mostrar errores -->
            @if($errors->any())
                <div class="errors">
                    @foreach($errors->all() as $error)
                        <p class="error-message">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('process-login') }}" class="login-form">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="example@domain.com" value="{{ old('email') }}" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>

                <button type="submit" class="btn">Log In</button>
            </form>
        </div>
        <div class="right-section">
            <h2>Ingresa y revoluciona tu negocio, entra en botbi</h2>
        </div>
    </div>
</body>
</html>

