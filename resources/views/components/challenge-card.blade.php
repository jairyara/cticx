@props(["title", "category"])
<article class="challengeCard">
    <h3>{{ $title }}</h3>
    <p>{{ App\Models\Challenge::CATEGORIES[$category] }}
    </p>
</article>
