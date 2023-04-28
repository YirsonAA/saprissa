<!-- resources/views/gestor.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Gestor</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('estadios.index') }}" class="btn btn-primary">Estadios</a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('partidos.index') }}" class="btn btn-primary">Partidos</a>
        </div>
    </div>
</div>
<script>
    const correctUsername = 'admin';
    const correctPassword = '123456';

    function setAuthCookie() {
        const expiration = new Date();
        expiration.setHours(expiration.getHours() + 1);
        document.cookie = `auth=true; expires=${expiration.toUTCString()}; path=/`;
    }

    function getAuthCookie() {
        const cookies = document.cookie.split('; ');
        for (const cookie of cookies) {
            if (cookie === 'auth=true') {
                return true;
            }
        }
        return false;
    }

    if (!getAuthCookie()) {
        const inputUsername = prompt('Introduzca su nombre de usuario:');
        const inputPassword = prompt('Introduzca su contraseña:');

        if (inputUsername === correctUsername && inputPassword === correctPassword) {
            setAuthCookie();
        } else {
            alert('Nombre de usuario o contraseña incorrectos.');
            window.location.href = '/';
        }
    }
</script>
@endsection