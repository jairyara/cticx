@extends('layout.dashboard')

@section('pageTitle', $title)

@section('dashboard')

    <section class="challenges">
        <h3>Crear reto</h3>
        <form method="POST">
            {{ csrf_field() }}
            <div class="label-form">
                <label for="question">Título</label>
                <input id="question" name="question" type="text" placeholder="Ingrese la pregunta" required>
            </div>
            <div class="label-form">
                <label for="category">Categoría</label>
                <select name="category" id="category">
                    <option selected disabled>Seleccione una opción</option>
                    @foreach(App\Models\Challenge::CATEGORIES as $k => $item)
                        <option value="{{ $k }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="label-form">
                <label for="answer">Solución</label>
                <input name="answer" id="answer" type="text" required>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </section>

@stop
