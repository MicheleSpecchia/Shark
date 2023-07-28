<x-layout>
<div class="p-10 max-w-3xl mx-auto mt-24 bg-white border border-laravel rounded p-6 flex items-center">
        <div class="w-1/2 pr-4">
            <!-- Box del logo -->
            <div class="flex items-center justify-center h-full">
                <img src="./images/logo.png" alt="Logo" class="w-2/3" />
            </div>
        </div>
        <div class="w-1/2 pl-4">
            <!-- Box del form di registrazione -->
            <header class="text-center mb-8">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    <span class="block">Sign Up</span>
                </h2>
                <p class="mb-4">
                    <span class="block">Crea il tuo account SHARK</span>
                </p>
            </header>

        <form method="POST" action="/newuser">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Nome
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}" />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Conferma Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" value="{{old('password_confirmation')}}" />

                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Hai già un account?
                    <a href="/login" class="text-laravel">Accedi</a>
                </p>
            </div>
        </form>
</div>
</x-layout>