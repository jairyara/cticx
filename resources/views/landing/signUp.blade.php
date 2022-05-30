@extends('layout.auth')

@section('pageTitle', 'Registrarse')

@section('content')

    <section class="signUp">
        <h1>CTICX</h1>
        <h3>Registrarse</h3>
        <form method="POST">
            <label for="name">Nombres</label>
            <input name="name" id="name" type="text" placeholder="Nombres" required>
            <label for="lastName">Apellidos</label>
            <input name="lastName" id="lastName" type="text" placeholder="Apellidos" required>
            <label for="email">Correo electrónico</label>
            <input name="email" id="email" type="email" placeholder="Correo electrónico" required>
            <label for="bornDate">Fecha de nacimiento</label>
            <input name="bornDate" id="bornDate" type="date" required>
            <label for="university">Universidad</label>
            <select name="university" id="university">
                <option selected disabled>Seleccione una opción</option>
                <option value="">ETITC</option>
            </select>
            <label for="gender">Género</label>
            <select name="gender" id="gender">
                <option selected disabled>Seleccione una opción</option>
                <option value="">Mujer</option>
                <option value="">Hombre</option>
                <option value="">No binario</option>
            </select>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" placeholder="********" required>
            <label for="confirmPassword">Confirmar contraseña</label>
            <input id="confirmPassword" name="confirmPassword" type="password" placeholder="********" required>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </section>

@stop
