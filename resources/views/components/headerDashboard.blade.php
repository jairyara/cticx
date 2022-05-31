@props(["page", "user"])

<header class="dashboardHeader">
    <div class="logo">
        <h1>
            cticx
        </h1>
    </div>

    <div class="sectionHeader">
        <h2>{{ $page }} </h2>
        <p>{{ $user }}</p>
    </div>
</header>
