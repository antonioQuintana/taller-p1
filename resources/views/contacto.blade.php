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
        <div class="card mt-4">
            <div class="card-body">
                <h2>Formulario de contacto</h2>
                <form action="{{url('/contacto')}}" method="POST"> <!--Hay que poner la
                    ruta a donde se envia la informacion del form y el metodo-->
                    @csrf <!-- Lo que hace es enviar un token de validacion -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese su nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" id="email" type="email" class="form-control" placeholder="Ingrese su email">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- @ include('exito') para probar la vista exito debajo de contacto-->
    
    
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>