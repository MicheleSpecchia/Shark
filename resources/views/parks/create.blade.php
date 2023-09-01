<x-layout>

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create Ads
            </h2>
            <p class="mb-4">Share a park</p>
        </header>

        <form method="POST" action="/parks" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="address" class="inline-block text-lg mb-2">Address</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" value="{{old('address')}}" />

                @error('address')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="cap" class="inline-block text-lg mb-2">Cap</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="cap" value="{{old('cap')}}" />

                @error('cap')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Park Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />
                @error('location')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="civico" class="inline-block text-lg mb-2">Civico</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="civico" value="{{old('civico')}}" />
                @error('civico')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="foto" class="inline-block text-lg mb-2">
                    Pics
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="foto" />

                @error('foto')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Park Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">
                {{old('description')}}
                </textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Ads
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    
</x-layout>