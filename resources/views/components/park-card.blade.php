@props(['park'])


<x-card>
        <div class="flex">
            <img class="hidden w-48 mr-6 md:block" src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/no-image.png')}}" alt="" />
            <div>
                <h3 class="text-2xl">
                    <a href="/parks/{{$park->id}}">{{$park->address}}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$park->location}}</div>
                <x-park-cap :tagsCsv="$park->cap" />
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-civico-dot"></i> {{$park->civico}}
                </div>
            </div>
        </div>
    </div>
</x-card>