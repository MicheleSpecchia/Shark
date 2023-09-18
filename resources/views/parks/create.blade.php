<x-layout>
    @include('partials._navbar')
    <div class="create-container">
        @if ($currentStep === 1)

        <div class="create-card">
            <form id="create-form" method="POST" action="/parks/create/step1">
                @csrf

                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>

                <h2>Dati Parcheggio</h2>

                <label for="location">Città</label>
                <input type="text" id="location" name="location" class="form-control" required>

                @error('location')
                <p class="text-danger text-xs mb-2">{{$message}}</p>
                @enderror


                <label for="address">Indirizzo</label>
                <input type="text" id="address" name="address" class="form-control" required>

                @error('address')
                <p class="text-danger text-xs mb-2">{{$message}}</p>
                @enderror


                <label for="cap">CAP</label>
                <input type="text" id="cap" name="cap" class="form-control" required>

                @error('cap')
                <p class="text-danger text-xs mb-2">{{$message}}</p>
                @enderror


                <button type="submit" class="create-btn btn-primary">Successivo</button>
            </form>
        </div>
        @endif

        @if ($currentStep === 2)

        <div class="create-card">
            <form id="card-form" method="POST" action="/parks/create/step2">
                @csrf
                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>
                <h2>Altri dettagli</h2>

                <label for="image_path">Foto</label>
                <input type="file" id="image_path" name="image_path" required />

                <label for="description">Descrizione</label>
                <textarea id="description" name="description" class="form-control" row="10" required></textarea>

                <div class="button-wrapper">
                    <button type="button" class="create-btn btn-secondary" onclick="history.back()">Precedente</button>
                    <button type="submit" class="create-btn btn-primary">Successivo</button>
                </div>
            </form>
        </div>
        @endif

        @if ($currentStep === 3)
        <div class="create-card">
            <form id="create-form" method="POST" action="/parks/create/step3">
                @csrf
                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>
                <h2>Altri dettagli</h2>

                <h3>Quali veicoli può ospitare?</h3>
                <p>Fai attenzione.</p>
                <p> Dovresti selezionare almeno una categoria delle tre per rendere il tuo parcheggio visibile.</p>
                <div class="checkbox-container">

                    <div class="custom-checkbox">
                        <input type="checkbox" id="automobili" name="automobili" value="automobili" class="hidden-checkbox">
                        <label for="automobili" class="custom-label" value="automobili">
                            automobili</label>
                    </div>

                    <div class="custom-checkbox">
                        <input type="checkbox" id="motocicli" name="motocicli" value="motocicli" class="hidden-checkbox">
                        <label for="motocicli" class="custom-label" value="motocicli">motocicli</label>
                    </div>

                    <div class="custom-checkbox">
                        <input type="checkbox" id="camper" name="camper" value="camper" class="hidden-checkbox">
                        <label for="camper" class="custom-label" value="camper">camper</label>
                    </div>
                </div>

                <h3>Quali optional presenta?</h3>
                <div class="checkbox-container">
                    <div class="custom-checkbox">
                        <input type="checkbox" id="camere" name="camere" value="camere" class="hidden-checkbox">
                        <label for="camere" class="custom-label" value="camere">videosorveglianza</label>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="tastierino" name="tastierino" value="tastierino" class="hidden-checkbox">
                        <label for="tastierino" class="custom-label" value="tastierino">tastierino</label>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="privato" name="privato" value="privato" class="hidden-checkbox">
                        <label for="privato" class="custom-label" value="privato">privato</label>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="aperto" name="aperto" value="aperto" class="hidden-checkbox">
                        <label for="aperto" class="custom-label" value="aperto">all'aperto</label>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="chiuso" name="chiuso" value="chiuso" class="hidden-checkbox">
                        <label for="chiuso" class="custom-label" value="chiuso">al chiuso</label>
                    </div>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="totem" name="totem" value="totem" class="hidden-checkbox">
                        <label for="totem" class="custom-label" value="totem">totem elettrico</label>
                    </div>

                </div>
                <div class="button-wrapper">
                    <button type="button" class="create-btn btn-secondary" onclick="history.back()">Precedente</button>
                    <button type="submit" class="create-btn btn-primary">Successivo</button>
                </div>

            </form>
        </div>
        @endif

        @if ($currentStep === 4)
        <div class="create-card">
            <form id="create-form" method="POST" action="/parks/create/step4">
                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>
                <h2>Metodo di Noleggio</h2>
                @csrf

                <p>Puoi decidere se accordarti con l'affittuario tramite scambio di chiavi:</p>
                <div class="custom-checkbox" data-group="only1">
                    <input type="checkbox" id="scambio" name="scambio" value="scambio" class="hidden-checkbox">
                    <label for="scambio" class="custom-label">Scambio di Chiavi</label>
                </div>

                <p>Puoi optare per la nostra offerta <a href="/offer">Shark Connect<a>: </p>

                <div class="custom-checkbox" data-group="only1">
                    <input type="checkbox" id="shark" name="shark" value="shark" class="hidden-checkbox">
                    <label for="shark" class="custom-label">Shark Connect</label>
                </div>

                <div class="button-wrapper">
                    <button type="button" class="create-btn btn-secondary" onclick="history.back()">Precedente</button>
                    <button type="submit" class="create-btn btn-primary">Successivo</button>
                </div>
            </form>
        </div>
        @endif

        @if ($currentStep === 5)
        <div class="create-card">
            <form id="create-form" method="POST" action="/parks/create/step5">
                @csrf
                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>
                <h2>Accordiamo il prezzo</h2>
                <div class="price-input-container">
                    <label for="price">Prezzo in euro sui 30 minuti:</label>
                    <div class="price-input-wrapper">
                        <button type="button" class="price-btn" id="decrement">-</button>
                        <input type="number" id="price" name="price" class="price-input" step="0.10" min="0" value="0.00">
                        <button type="button" class="price-btn" id="increment">+</button>
                    </div>
                </div>

                <p>Il prezzo da inserire si basa sui 30 minuti.</p>
                <p>Il 90% del guadagno verrà accreditato direttamente sul tuo conto.</p>
                <p>Il 10% sarà preso per supportare la piattaforma.</p>


                <div class="button-wrapper">
                    <button type="button" class="create-btn btn-secondary" onclick="history.back()">Precedente</button>
                    <button type="submit" class="create-btn btn-primary">Successivo</button>
                </div>
            </form>
        </div>
        @endif


        @if ($currentStep === 6)
        <div class="create-card">
            <form id="create-form" method="POST" action="/parks/store">
                <div class="progress-bar">
                    <div class="progress" style="width: {{ ($currentStep - 1) * 16.67 }}%;"></div>
                </div>
                @csrf
                <h2>Termini e condizioni</h2>

                <label for="cond">Termini e condizioni</label>
                <input type="checkbox" id="cond" name="cond" value="cond" required> Accetto Termini e Condizioni



                <div class="button-wrapper">
                    <button type="button" class="create-btn btn-secondary" onclick="history.back()">Precedente</button>
                    <button type="submit" class="create-btn btn-primary">Successivo</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</x-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scambioCheckbox = document.getElementById("scambio");
        const sharkCheckbox = document.getElementById("shark");

        scambioCheckbox.addEventListener("change", function() {
            if (scambioCheckbox.checked) {
                sharkCheckbox.checked = false;
            }
        });

        sharkCheckbox.addEventListener("change", function() {
            if (sharkCheckbox.checked) {
                scambioCheckbox.checked = false;
            }
        });
    });

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