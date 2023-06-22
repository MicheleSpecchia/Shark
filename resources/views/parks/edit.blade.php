<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Ads
            </h2>
            <p class="mb-4">Edit: {{$park->address}}</p>
        </header>

        <form method="POST" action="/parks/{{$park->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="address" class="inline-block text-lg mb-2">Address </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{$park->address}}" />

                @error('address')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">cap</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="cap" value="{{$park->cap}}"/>

                @error('cap')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Park Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{$park->location}}" />
                @error('location')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="civico" class="inline-block text-lg mb-2">Civico</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="civico" value="{{$park->civico}}" />
                @error('civico')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="foto" class="inline-block text-lg mb-2">
                    Park Foto
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="foto" />

                <img class="hidden w-48 mr-6 md:block" src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/no-image.png')}}" alt="" />

                @error('foto')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Park Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">
                {{$park->description}}
                </textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Edit Ads
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>