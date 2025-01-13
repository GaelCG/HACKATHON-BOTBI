<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Botbi</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="main-container">
        <aside class="sidebar">
            <h2>Botbi</h2>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="{{ route('clients.index') }}">Apartado de Clientes</a></li>
                    <li><a href="#">Configuración</a></li>
                </ul>
            </nav>
        </aside>
        <main class="content">
            <h1>Bienvenido al Dashboard</h1>
        </main>
    </div>
</body>
</html>
