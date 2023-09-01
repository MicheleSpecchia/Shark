<!-- Barra di ricerca per il parcheggio -->
<form class="search-bar" action="URL_DOVE_INVIARE_I_DATI" method="get">
    <!-- Input per la location desiderata -->
    <input type="text" id="location" name="location" placeholder="Luogo">
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
    <button id="search-btn" type="submit">Cerca</button>
</form>