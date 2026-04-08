<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TP-4')</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Mi Sitio</a>

            <div class="navbar-nav">
                <a href="/" wire:navigate class="nav-link">Inicio</a>
                <a href="/sobre-mi" wire:navigate class="nav-link">Sobre mí</a>
                <a href="/contacto" wire:navigate class="nav-link">Contacto</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>
</html>
