<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Aggiungi queste righe nel tag <head> del tuo layout o nella sezione delle risorse -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body>

    <a href="/user" class="inline-block text-black ml-4 mb-4"><i class="bi bi-arrow-left"></i> Back</a>

    <div class="mx-4">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 md:w-96 mb-6" src="{{$park->foto ? asset('storage/' . $park->foto) : asset('/images/no-image.png')}}" alt="Park Image" />

            <h3 class="text-3xl font-bold mb-2">{{$park->address}}</h3>
            <div class="text-xl font-bold mb-4">{{$park->location}}</div>

            <div class="text-lg my-4">
                <i class="bi bi-house-door"></i> {{$park->civico}}
            </div>

            <hr class="border border-gray-200 w-full mb-6">

            <div>
                <h3 class="text-3xl font-bold mb-4">Park Description</h3>
                <div class="text-lg space-y-4 leading-7">
                    {{$park->description}}
                </div>
            </div>

            <form method="POST" action="/prenota">
                @csrf
                <!-- Menu a tendina per la prenotazione -->

                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <input type="hidden" name="park_id" value="{{ $park->id }}">

                <div>
                    <label for="start_time" class="block text-lg font-bold mt-2">Arrival Time:</label>
                    <input type="datetime-local" name="start_time" class="block w-full mt-2 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
                  
                    @error('start_time')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
                </div>

                <div>
                    <label for="end_time" class="block text-lg font-bold mt-2">Departure Time:</label>
                    <input type="datetime-local" name="end_time" class="block w-full mt-2 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500">
                   
                    @error('end_time')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
                </div>

                <input type="hidden" name="price" value="30">
                <input type="hidden" name="veicolo" value="moto">


                <!-- Fine menu a tendina per la prenotazione -->
                <div>
                    <button class="text-white rounded bg-blue-500 hover:bg-blue-700 transition-colors p-4 mt-4 font-bold">
                        PRENOTA
                    </button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>