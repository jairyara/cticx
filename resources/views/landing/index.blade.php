@extends('layout.landing')

@section('pageTitle', 'Inicio')

@section('landing')
    <section class="hero" id="hero">
        <img src="{{ asset('assets/bg-hero.png') }}" alt="Fondo">
        <div class="hero__content container-element">
            <article class="d-flex flex-column align-items-center w-50 mx-auto">
                <h1 class="text-white mb-5">Encuentra retos de Seguridad Informática, aprende, enseña</h1>
                <button class="btn btn-primary text-white text-capitalize">registrarse</button>
            </article>
        </div>
    </section>
    <section class="about" id="platform">
        <div class="about__content container-element">
            <h2 class="title-landing">Sobre la plataforma</h2>
            <div class="about__content--description w-75 mx-auto">
                <article class="row d-flex align-items-center justify-content-between mb-4">
                    <p class="col-7">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <figure class="col-5 mx-auto d-flex justify-content-center">
                        <img src="./assets/img1.png" alt="Code" title="Code"/>
                    </figure>
                </article>
                <article class="row d-flex justify-content-between align-items-center">
                    <p class="col-7">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <figure class="col-5 mx-auto d-flex justify-content-center">
                        <img src="./assets/img2.png" alt="Terminal" title="Terminal"/>
                    </figure>
                </article>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="team__content container-element">
            <h2 class="title-landing">
                Equipo de trabajo
            </h2>
            <section class="team__content--list d-flex align-items-center justify-content-between w-75 mx-auto">
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p1.png" alt="Manuel Pacheco" title="Manuel Pacheco">
                    </figure>
                    <div class="p-4">
                        <h3>
                            Manuel Pacheco
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p2.png" alt="David Suaza" title="David Suaza">
                    </figure>
                    <div class="p-4">
                        <h3>
                            David Suaza
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
                <article class="card-team bg-gray-200 rounded">
                    <figure class="m-0">
                        <img src="./assets/p3.png" alt="Jair Yara" title="Jair Yara">
                    </figure>
                    <div class="p-4">
                        <h3>
                            Jair Yara
                        </h3>
                        <h4>
                            Programador
                        </h4>
                        <p>
                            Me gustan los gatos
                        </p>
                    </div>
                </article>
            </section>
        </div>
    </section>
    <section class="requirements mb-5" id="requirements">
        <div class="requirements__content container-element">
            <h2 class="title-landing">
                Requerimientos
            </h2>
            <ul class="w-75 mx-auto">
                <li>Entusiasmo por aprender</li>
                <li>Nociones teóricas de seguridad informática</li>
                <li>Gusto por los retos</li>
                <li>Ganas de aportar y crear comunidad</li>
                <li>Mejora continua</li>
            </ul>
        </div>
    </section>
@stop
