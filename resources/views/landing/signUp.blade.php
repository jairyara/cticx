@extends('layout.auth')

@section('pageTitle', 'Registrarse')

@section('content')

    @php
        use App\Models\University;

        $universities = University::all();
    @endphp
    <section class="signUp">
        <h1>CTICX</h1>
        <h3>Registrarse</h3>

        <form method="POST">
            {{ csrf_field() }}
            <label for="name">Nombres</label>
            <input name="name" id="name" type="text" placeholder="Nombres" required>
            <label for="lastname">Apellidos</label>
            <input name="lastname" id="lastname" type="text" placeholder="Apellidos" required>
            <label for="email">Correo electrónico</label>
            <input name="email" id="email" type="email" placeholder="Correo electrónico" required>
            <label for="bornDate">Fecha de nacimiento</label>
            <input name="bornDate" id="bornDate" type="date" required>
            <label for="university">Universidad</label>
            <select name="university" id="university" required>
                <option selected disabled>Seleccione una opción</option>
                @foreach($universities as $x)
                    <option value="{{$x->id}}">{{$x->name}}</option>
                @endforeach
            </select>
            <label for="gender">Género</label>
            <select name="gender" id="gender" required>
                <option selected disabled>Seleccione una opción</option>
                <option value="0">Mujer</option>
                <option value="1">Hombre</option>
                <option value="2">No binario</option>
            </select>
            <label for="password">Contraseña</label>
            <input id="password" name="password" type="password" placeholder="********" required>
            <label for="confirmPassword">Confirmar contraseña</label>
            <input id="confirmPassword" name="confirmPassword" type="password" placeholder="********" required>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </section>

@stop
