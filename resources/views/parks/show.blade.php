<x-layout>
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
                    <label for="duration" class="block text-lg font-bold mt-2">Durata della prenotazione:</label>
                    <select id="duration" name="duration">
                        <option value="1">1 giorno</option>
                        <option value="multiple">Prenotazione multipla</option>
                    </select>
                </div>

                <div id="singleDay">
                    <div>
                        <label for="data_inizio" class="block text-lg font-bold mt-2">Data:</label>
                        <input type="date" name="data_inizio" id="data_inizio">
                        @error('data_inizio')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror
                    </div>
                    <input type="hidden" name="data_fine" id="data_fine" value="23/09/2023">
                </div>

                <div id="multipleDays" style="display: none;">
                    <div>
                        <label for="data_inizio" class="block text-lg font-bold mt-2">Data di inizio:</label>
                        <input type="date" id="data_inizio" name="data_inizio">
                        @error('multiple_data_inizio')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror

                        <label for="data_fine" class="block text-lg font-bold mt-2">Data di fine:</label>
                        <input type="date" id="data_fine" name="data_fine">
                        @error('multiple_data_fine')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="start_time" class="block text-lg font-bold mt-2">Orario di arrivo: </label>
                    <select id="start_time" name="start_time"></select>

                    @error('start_time')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                    @enderror
                </div>

                <div>
                    <label for="end_time" class="block text-lg font-bold mt-2">Orario di fine:</label>
                    <select id="end_time" name="end_time"></select>

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

    <!-- Inizializza la gestione della visibilità dei campi di input -->
    <script>
        const durationSelect = document.getElementById('duration');
        const singleDayFields = document.getElementById('singleDay');
        const multipleDaysFields = document.getElementById('multipleDays');
        const startSelect = document.getElementById('start_time');
        const endSelect = document.getElementById('end_time');
        const startDateInput = document.getElementById('data_inizio');

        durationSelect.addEventListener('change', function() {
            if (durationSelect.value === '1') {
                singleDayFields.style.display = 'block';
                multipleDaysFields.style.display = 'none';
            } else if (durationSelect.value === 'multiple') {
                singleDayFields.style.display = 'none';
                multipleDaysFields.style.display = 'block';
            }
        });

        for (let ora = 0; ora < 24; ora++) {
            for (let minuto = 0; minuto < 60; minuto += 15) {
                const orario = `${ora.toString().padStart(2, '0')}:${minuto.toString().padStart(2, '0')}`;
                const option = new Option(orario, orario);
                startSelect.appendChild(option);
                endSelect.appendChild(option.cloneNode(true));
            }
        }

        startSelect.addEventListener('change', function() {
            // Ottieni il valore selezionato per start_time
            const selectedStartTime = startSelect.value;

            // Seleziona il menu a tendina end_time
            const endSelect = document.getElementById('end_time');

            // Ottieni il valore selezionato per duration
            const durationSelect = document.getElementById('duration');
            const selectedDuration = durationSelect.value;

            // Rimuovi tutte le opzioni esistenti da end_time
            endSelect.innerHTML = '';

            // Genera dinamicamente le opzioni per gli orari a intervalli di 15 minuti
            for (let ora = 0; ora < 24; ora++) {
                for (let minuto = 0; minuto < 60; minuto += 15) {
                    const orario = `${ora.toString().padStart(2, '0')}:${minuto.toString().padStart(2, '0')}`;
                    const option = new Option(orario, orario);

                    // Verifica se la durata è "Prenotazione multipla" o se l'orario è maggiore o uguale a selectedStartTime
                    if (selectedDuration === 'multiple' || orario >= selectedStartTime) {
                        endSelect.appendChild(option);
                    }
                }
            }
        });


        const endDateInput = "";

        // Ottieni la data corrente
        const currentDate = new Date();
        const currentDateString = currentDate.toISOString().split('T')[0];

        // Imposta la data minima per la data di inizio come la data corrente
        startDateInput.min = currentDateString;

        // Aggiungi un ascoltatore di eventi all'input di data di inizio
        startDateInput.addEventListener('change', function() {
            endDateInput = document.getElementById('data_fine');
            // Ottieni la data di inizio selezionata
            const selectedStartDate = new Date(startDateInput.value);

            // Imposta la data minima per la data di fine come un giorno dopo la data di inizio
            const minEndDate = new Date(selectedStartDate);
            minEndDate.setDate(selectedStartDate.getDate() + 1);

            // Imposta la data minima per la data di fine nel campo input
            endDateInput.min = minEndDate.toISOString().split('T')[0];

            // Reimposta il valore se la data di fine è inferiore alla data minima
            if (new Date(endDateInput.value) < minEndDate) {
                endDateInput.value = minEndDate.toISOString().split('T')[0];
            }
        });
    </script>
</x-layout>