<x-layout>

    @include('partials._navbar');
    <div class="create-container">
        <div class="create-card">

            <h2>Modifica il tuo parcheggio</h2>
            <form clss="create-form" method="POST" action="/parks/{{$park->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="address">Indirizzo </label>
                <input type="text" name="address" value="{{$park->address}}" />
                @error('address')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <label for="cap">Cap</label>
                <input type="text" name="cap" value="{{$park->cap}}" />
                @error('cap')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <label for="location">Città</label>
                <input type="text" name="location" value="{{$park->location}}" />
                @error('location')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <label for="foto">
                    Aggiungi foto
                </label>
                <input type="file" name="foto" />
                @error('foto')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <label for="description">Descrizione</label>
                <input type="text" id="description" name="description" value="{{$park->description}}">
                @error('description')
                <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <div class="price-input-container">
                    <label for="price">Prezzo in euro sui 30 minuti:</label>
                    <div class="price-input-wrapper">
                        <button type="button" class="price-btn" id="decrement">-</button>
                        <input type="number" id="price" name="price" class="price-input" step="0.10" min="0" value="{{$park->price}}">
                        <button type="button" class="price-btn" id="increment">+</button>
                    </div>
                </div>

                <div class="button-wrapper">
                    <a href="/parks/manage" class="create-btn btn-secondary"> INDIETRO </a>
                    <button class="create-btn btn-primary">AGGIORNA </button>
                </div>
            </form>
        </div>
    </div>

</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const priceInput = document.getElementById("price");
        const incrementButton = document.getElementById("increment");
        const decrementButton = document.getElementById("decrement");

        incrementButton.addEventListener("click", function() {
            let currentPrice = parseFloat(priceInput.value) || 0;
            currentPrice += 0.10;
            priceInput.value = currentPrice.toFixed(2); // Mostra sempre due decimali
        });

        decrementButton.addEventListener("click", function() {
            let currentPrice = parseFloat(priceInput.value) || 0;
            currentPrice -= 0.10;
            if (currentPrice < 0) {
                currentPrice = 0;
            }
            priceInput.value = currentPrice.toFixed(2); // Mostra sempre due decimali
        });
    });
</script>