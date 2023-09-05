<!-- Barra di ricerca per il parcheggio -->
<form class="search-bar" action="URL_DOVE_INVIARE_I_DATI" method="get">
    <!-- Input per la ricerca del luogo con una tendina associata per i suggerimenti -->
    <input type="text" id="location" name="location" placeholder="Luogo" list="citiesList">
    <datalist id="citiesList"></datalist>
    <!-- Input per data e ora di arrivo -->
    <input type="datetime-local" id="arrival" name="arrival" placeholde>
    <!-- Input per data e ora di fine -->
    <input type="datetime-local" id="end" name="end" placeholder="Data">
    <!-- Selezione tipo di veicolo -->
    <select id=" vehicle-type" name="vehicle-type">
        <option value="auto">Auto</option>
        <option value="moto">Moto</option>
        <option value="camper">Camper</option>
    </select>
    <!-- Bottone per avviare la ricerca -->
    <button id="search-btn" type="submit"><i class="fa-solid fa-magnifying-glass-location"></i></button> <!-- Lente di ingrandimento-->


    <script>
        // Aggiungi un listener all'input per rilevare quando l'utente digita
        document.getElementById('location').addEventListener('input', function() {
            // Ottieni il valore corrente dell'input
            const query = this.value;

            // Inizia la ricerca dalla prima lettera digitata
            if (query.length > 0) {
                // Esegui una chiamata AJAX all'API di Geonames
                fetch(`http://api.geonames.org/search?name_startsWith=${query}&country=IT&lang=it&cities=cities15000&orderby=population&username=pippone`)
                    .then(response => response.text()) // Converti la risposta in testo
                    .then(str => (new window.DOMParser()).parseFromString(str, "text/xml")) // Converti la stringa di testo in un oggetto XML
                    .then(data => {
                        // Ottieni l'elemento datalist
                        const datalist = document.getElementById('citiesList');
                        datalist.innerHTML = ''; // Pulisci le opzioni precedenti

                        // Ottieni tutti gli elementi 'geoname' dalla risposta
                        const geonames = data.getElementsByTagName('geoname');

                        // Set per tracciare le città già aggiunte e garantire l'unicità
                        const addedCities = new Set();

                        // Itera su ogni elemento 'geoname'
                        for (let i = 0; i < geonames.length; i++) {
                            // Ottieni il nome della città dall'elemento 'name'
                            const cityName = geonames[i].getElementsByTagName('name')[0].textContent;
                            const toponymName = geonames[i].getElementsByTagName('toponymName')[0].textContent;

                            // Se la città non è già stata aggiunta al set
                            // Per Bug all'interno dell'api bisogna effettuare qualche operazione di fixing sul dataset
                            if (!addedCities.has(cityName) && cityName.substring(0, 3) === toponymName.substring(0, 3)) {
                                // Crea un nuovo elemento 'option' per la città
                                const option = document.createElement('option');
                                option.value = cityName;

                                // Aggiungi l'opzione al datalist
                                datalist.appendChild(option);

                                // Aggiungi la città al set per tracciare le città già aggiunte
                                addedCities.add(cityName);
                            }
                        }
                    });
            }
        });
    </script>



</form>