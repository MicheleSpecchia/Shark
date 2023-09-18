<x-layout>

    @include('partials._navbar')

    @if(!isset($parks) || count($parks) < 1) <div class="content">
        <div class="container">

            <h1>Parcheggia dove vuoi</h1>
            <h1>quando vuoi.</h1>
            <h2>Prenota ora il tuo parcheggio</h2>


            @include('partials._search_home')

        </div>
        </div>
    @endif

    @if(isset($parks) && count($parks) > 0)

        <div class="search-content">
            @include('partials._search')
        </div>

        <div class="container">
            <div class="row d-flex mt-5">

                @unless(count($parks)==0)
                @foreach($parks as $park)
                <x-park-card :park="$park" />
                @endforeach
                @endunless

            </div>
        </div>

        <div>
            {{ $parks->links('pagination::bootstrap-4') }}
        </div>

    @endif

        <div id="popup" class="popup">
            <div class="popup-content">
                <h2>OPS</h2>
                <p>Siamo spiacenti ma la ricerca non ha prodotto risultati.</p>
            </div>
        </div>
</x-layout>

@if (isset($parks) && count($parks) < 1) <script>

    document.getElementById('popup').style.display = 'block';


    setTimeout(function() {
    document.getElementById('popup').style.display = 'none';
    }, 5000);
    </script>
@endif