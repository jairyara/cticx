@props(["img", "name", "career", "description"])
<article class="opinionCard">
    <div class="opinionCard__profile">
        <img src="{{ asset("assets/$img") }}" alt="{{ $name }}">
        <div class="opinionCard__profile--data">
            <h3>{{ $name }}</h3>
            <p>{{ $career }}</p>
        </div>
    </div>
    <div class="opinionCard__description">
        <p>{{ $description }}</p>
    </div>
</article>
