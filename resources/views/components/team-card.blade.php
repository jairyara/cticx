@props(["img", "name", "rol", "description"])
<article class="card-team">
    <figure class="card-team__img">
        <img src="{{ asset("assets/$img") }}" alt="{{ $name }}" title="{{ $name }}">
    </figure>
    <div class="card-team__content">
        <h3>{{ $name }}</h3>
        <h4>{{ $rol }}</h4>
        <p>{{ $description }}</p>
    </div>
</article>
