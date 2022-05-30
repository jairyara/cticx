@props(["img", "name", "career", "description"])
<article>
    <div>
        <img src="{{ $img }}" alt="{{ $name }}">
        <div>
            <h3>{{ $name }}</h3>
            <p>{{ $career }}</p>
        </div>
    </div>
    <div>
        <p>{{ $description }}</p>
    </div>
</article>
