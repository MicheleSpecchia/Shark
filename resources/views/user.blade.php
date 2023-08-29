<x-layout>
    @include('partials._search')

    <section class="recommended" id="deals">
        <div class="container">
            <div class="row mt-5">

                @unless(count($parks)==0)

                @foreach($parks as $park)



                <x-park-card :park="$park" />




                @endforeach

                @else
                <p> no ads Found </p>
                @endunless
            </div>
    </section>

    <div class="mt-6-p-4">
        {{$parks->links()}}
    </div>

    @include('partials._footer')
</x-layout>