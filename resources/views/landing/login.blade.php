@extends('layout.auth')

@section('pageTitle', 'Iniciar sesión')

@section('content')

    <section class="login">
        <h1>CTICX</h1>
        <h3>Iniciar sesión</h3>
        <form method="POST">
            <label for="user">Usuario</label>
            <input name="user" id="user" type="text" placeholder="Usuario" required>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" placeholder="********" required>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <div class="resetPass">
            <a href="#">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="signUpCTA">
            <h4>¿No tienes cuenta?</h4>
            <button onclick="window.location.href='/registrarse'" class="btn btn-secondary">Registrarse</button>
        </div>
    </section>

@stop
