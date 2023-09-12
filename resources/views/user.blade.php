<x-layout>
    @include('partials._navbar')

    <div class="content2">
        @include('partials._search')
    </div>

    <div class="container">
        <div class="row mt-5">

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

</x-layout>