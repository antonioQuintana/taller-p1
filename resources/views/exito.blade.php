@extends('layouts.app')

@section('title', 'Mensaje enviado')

@section('content')
    <div class="alert alert-success" role="alert">
        Hola <strong>{{ $nombre }}</strong>, qué bueno recibir tu mensaje. Un miembro del equipo de ventas se pondrá en contacto con vos al correo: <strong>{{ $email }}</strong> ¡Muchas gracias!
    </div>
@endsection
