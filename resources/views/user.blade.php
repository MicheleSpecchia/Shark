<x-layout>
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-3 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($parks)==0)

        @foreach($parks as $park)
        <x-park-card :park="$park" />
        @endforeach

        @else
        <p> no ads Found </p>
        @endunless

    </div>

    <div class="mt-6-p-4">
        {{$parks->links()}}
    </div>
    @include('partials._footer')
</x-layout>