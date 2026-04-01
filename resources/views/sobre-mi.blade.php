<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Mi Sitio</a>

            <div class="navbar-nav">
                <a href="/" class="nav-link">Inicio</a>
                <a href="/sobre-mi" class="nav-link">Sobre mí</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Sobre mí</h1>
                <p><b>Nombre:</b> Antonio Quintana</p> 
    
                <p><b>Edad:</b> 26 años</p> 
                
                <p><b>De dónde soy:</b> Corrientes, Argentina</p> 
                
                <p><b>Me gustaría trabajar en:</b> Desarrollo de software</p> 
                
                <p><b>Expectativas del curso:</b> Aprender a crear aplicaciones 
                web</p> 
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary mt-3">Descargar CV</a>
    <a href="#" class="btn btn-secondary mt-3">Conectar</a>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>