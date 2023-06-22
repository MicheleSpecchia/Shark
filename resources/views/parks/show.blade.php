<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card>
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
            </div>
        </x-card>

        {{--<x-card class="mt-4 p-2 flex space-x-6">   
            <a href="/parks/{{$park->id}}/edit">
            <i class="fa-solid fa-pencil"> </i> edit
            </a>

            <form method="POST" action="/parks/{{$park -> id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"> 
                    <i class="fa-solid fa-trash"></i>
                    Delete 
                </button>
            </form>
        </x-card> --}}
    </div>
</x-layout>