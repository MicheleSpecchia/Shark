<x-layout>
    @include('partials._search')

    <a href="/user" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">

        <div class="flex flex-col items-center justify-center text-center">
            <img class="hidden w-48 mr-6 md:block" src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/no-image.png')}}" alt="" />

            <h3 class="text-2xl mb-2">{{$park->address}}</h3>
            <div class="text-xl font-bold mb-4">{{$park->location}}</div>

            <x-park-cap :tagsCsv="$park->cap" />

            <div class="text-lg my-4">
                <i class="fa-solid fa-civico-dot"></i> {{$park->civico}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Park Description
                </h3>
                <div class="text-lg space-y-6">
                    {{$park->description}}
                </div>
            </div>

            <button type="submit" class=" text-white rounded- bg-blue-500 hover:bg-red-500 transition-colors p-4 mb-20 mt-20 font-bold">
                <a href="/"> PRENOTA </a>
            </button>
        </div>

    </div>
</x-layout>