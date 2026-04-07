<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP-4</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Ejercicio TP-4</a>

            <div class="navbar-nav">
                <a href="/" class="nav-link">Inicio</a>
                <a href="/sobre-mi" class="nav-link">Sobre mí</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
        Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje. Un miembro del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email }}</strong> ¡Muchas gracias!
        </div>
    </div>
    
    
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>