@props(['park'])
<x-card>
    <div class="flex items-center" onclick="window.location.href='/parks/{{$park->id}}';" style="cursor: pointer;">
        <div class="w-1/2 pr-6">
            <div>
                <h3 class="text-2xl md:text-3xl lg:text-4xl">
                    {{$park->address}}
                </h3>
                <div class="text-xl md:text-2xl lg:text-3xl font-bold mb-4">{{$park->location}}</div>
                <x-park-cap :tagsCsv="$park->cap" />
                <div class="text-lg md:text-xl lg:text-2xl mt-4">
                    <i class="fa-solid fa-civico-dot"></i> {{$park->civico}}
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img class="w-48 md:w-full" src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/no-image.png')}}" alt="" />
        </div>
    </div>
</x-card>
