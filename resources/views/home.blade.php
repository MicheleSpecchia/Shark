<x-layout>

@include('partials._navbar')

    <!-- Contenuto principale -->
    <div class="content">
        <div class="container">
        <!-- Titolo e sottotitolo -->
        <h1>Parcheggia dove vuoi</h1>
        <h1>Quando vuoi.</h1>
        <h2>Prenota ora il tuo parcheggio</h2>
        
        <!-- Search-bar -->
        @include('partials._search')
        </div>
    </div>
</x-layout>
