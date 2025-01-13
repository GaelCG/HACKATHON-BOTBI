<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Botbi</title>
    @vite(['resources/css/stylesHome.css'])
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
            <h1>Bienvenido a Botbi</h1>
            <br>
            <p class="lorem">Bienvenido a Botbi conoce mas!</p>

            <p class="pInicial">Para comenzar, ve al apartado de "Apartado de Clientes" donde podrás registrar a tus clientes.</p>
        </main>
    </div>
</body>
</html>