@extends('layout.dashboard')

@section('pageTitle', $title)

@section('dashboard')

    <section class="challenges">
        <h3>Crear reto</h3>
        <form>
            <label for="question">Título</label>
            <input id="question" name="question" type="text" placeholder="Ingrese la pregunta" required>
            <label for="category">Categoría</label>
            <select name="category" id="category">
                <option selected disabled>Seleccione una opción</option>
                <option value=""></option>
            </select>
            <label for="answer1">Solución 1</label>
            <input name="answer1" id="answer1" type="text" required>
            <label for="answer2">Solución 2</label>
            <input name="answer2" id="answer2" type="text" required>
            <label for="answer3">Solución 3</label>
            <input name="answer3" id="answer3" type="text" required>
            <label for="answer4">Solución 4</label>
            <input name="answer4" id="answer4" type="text" required>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </section>

@stop
