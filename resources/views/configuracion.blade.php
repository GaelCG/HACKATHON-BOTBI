<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    @vite(['resources/css/styleConf.css'])
</head>
<body>
    <div class="main-container">
        <aside class="sidebar">
            <img src="{{ asset('images/botbi.png') }}" alt="Botbi Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('clientes') }}">Apartado de Clientes</a></li>
                    <li><a href="{{ route('configuracion') }}">Configuración</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <h1>Configuración</h1>
            <p>En la sección de configuración podrás ajustar varios parámetros de tu cuenta para mejorar tu experiencia.</p>
            <div class="config-info">
                <br>
                <img src="{{ asset('images/conf.jpg') }}" alt="Configuración personalizada">
                <br>
                <h2>Personaliza tu experiencia</h2>
                <br>
                <p>Configura tu cuenta a tu gusto y disfruta de una experiencia más personalizada. ¡Explora todas las opciones!</p>
            </div>
        </main>
    </div>
    <script src="script.js"></script>
</body>
</html>
