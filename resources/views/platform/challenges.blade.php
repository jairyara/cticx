@extends('layout.dashboard')

@section('pageTitle', $title)

@section('dashboard')

    <section class="challenges">
        <h3>Crear reto</h3>
        <form>
            <div class="label-form">
                <label for="question">Título</label>
                <input id="question" name="question" type="text" placeholder="Ingrese la pregunta" required>
            </div>
            <div class="label-form">
                <label for="category">Categoría</label>
                <select name="category" id="category">
                    <option selected disabled>Seleccione una opción</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="label-form">
                <label for="answer">Solución</label>
                <select name="answer" id="answer">
                    <option selected disabled>Seleccione una opción</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </form>
    </section>

@stop
