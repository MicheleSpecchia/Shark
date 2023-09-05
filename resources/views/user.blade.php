<x-layout>
    @include('partials._navbar')
    @include('partials._search')

    
        <div class="container">
            <div class="row mt-5">

                @unless(count($parks)==0)
                @foreach($parks as $park)
                <x-park-card :park="$park" />
                @endforeach
                @endunless
                
            </div>
        </div> 

    <div class="mt-6-p-4">
        {{$parks->links()}}
    </div>

    @include('partials._footer')
</x-layout>