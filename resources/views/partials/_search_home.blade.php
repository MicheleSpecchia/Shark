<div class="row">
    <div class="col-md-6">
        <div class="home-search-bar">
            <form action="/parks/search" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="search-form">
                            <div class="location">
                                <input type="text" id="location" name="location" placeholder="Città, Indirizzo.." class="location-input" list="citiesList" required>
                                <datalist id="citiesList"></datalist>
                                <span class="icon-sb"> <i class="fa fa-map-marker" style="color: #bdbec1;"></i></span>
                                @error('location')
                                @enderror
                            </div>
                            <div class="veicolo">
                                <select id="veicolo-select" name="veicolo" class="veicolo-input">
                                    <option value="auto">Auto</option>
                                    <option value="moto">Moto</option>
                                    <option value="camper">Camper</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="search-form">
                            <div class="date-input">
                                <input type="text" id="date-input" name="date-input" placeholder="Data di inizio" readonly required>
                                <span class="icon-sb"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                                @error('date-input')
                                @enderror
                            </div>
                            <div class="time-input">
                                <select id="time-input" name="time-input" style="display: none;" required></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="search-form">
                            <div class="date-output">
                                <input type="text" id="date-output" name="date-output" placeholder="Data di fine" readonly required>
                                <span class="icon-sb"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                                @error('date-output')
                                @enderror
                            </div>
                            <div class="time-output">
                                <select id="time-output" name="time-output" style="display: none;" required></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit">Cerca<i class="fa-solid fa-magnifying-glass-location"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function() {
        $("#date-input").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0, // Impedisce di selezionare date passate
            onSelect: function(selectedDate) {
                $("#date-output").datepicker("option", "minDate", selectedDate);
                showTimeSelect('date-input', 'time-input');
            }
        });
        $("#date-output").datepicker({
            dateFormat: 'yy-mm-dd',
            minDate: 0, // Impedisce di selezionare date passate
            onSelect: function(selectedDate) {
                showTimeSelect('date-output', 'time-output');
                $("#date-input").datepicker("option", "maxDate", selectedDate);
            }
        });
        $("#time-input").on("change", function() {
            showTimeSelect('date-output', 'time-output');
        });
    });

    function showTimeSelect(inputElement, selectElement) {
        var select = document.getElementById(selectElement);
        select.style.display = 'block';

        var startDate = $("#date-input").datepicker("getDate");
        var endDate = $("#date-output").datepicker("getDate");
        var currentTime = new Date();

        if (inputElement === 'date-input') {

            //SE DATA-INIZIO = DATA-CORRRENTE
            if (startDate && startDate.getDate() === currentTime.getDate() && startDate.getMonth() === currentTime.getMonth() && startDate.getFullYear() === currentTime.getFullYear()) {
                var selectStart = document.getElementById("time-input");
                var selectEnd = document.getElementById("time-output");
                var time = new Date(currentTime);

                // Imposta l'orario minimo per inizio e fine
                time.setMinutes(Math.ceil(currentTime.getMinutes() / 30) * 30); // Arrotonda all'ora più vicina

                //SVUOTO LE OPTION DI DATA INIZIO
                select.innerHTML = "";

                // Aggiungi le opzioni di orario con un intervallo di 30 minuti a partire dall'orario corrente
                for (var i = 0; i < 24 * 2 && time <= new Date(currentTime.getFullYear(), currentTime.getMonth(), currentTime.getDate(), 23, 31); i++) {
                    var formattedTime = formatTime(time);

                    if (time >= currentTime) {
                        var option = new Option(formattedTime, formattedTime);
                        select.appendChild(option);
                    }

                    time.setMinutes(time.getMinutes() + 30);
                }
            } else {

                var startTime = new Date();
                startTime.setHours(0, 0, 0, 0);
                var timeOptions = [];
                select.innerHTML = "";

                for (var i = 0; i < 24 * 2; i++) {
                    var formattedTime = formatTime(startTime);
                    var option = new Option(formattedTime, formattedTime);
                    timeOptions.push(option);
                    startTime.setMinutes(startTime.getMinutes() + 30);
                }

                timeOptions.forEach(function(option) {
                    select.appendChild(option);
                });
            }

            if (endDate) {
                showTimeSelect('date-output', 'time-output');
            }
        }

        if (inputElement === 'date-output') {
            if (startDate && endDate && startDate.getDate() === endDate.getDate()) {
                // Se sono uguali, ottieni l'orario di inizio dal campo "time-input"
                var startTime = $("#time-input").val();
                var selectEnd = document.getElementById("time-output");
                select.innerHTML = ""; // Pulisci le opzioni precedenti

                // Imposta l'orario minimo per "time-output" come l'orario di inizio
                var startTimeObj = new Date("2000-01-01T" + startTime);
                startTimeObj.setMinutes(startTimeObj.getMinutes() + 30); // Aggiungi mezz'ora
                var formattedStartTime = formatTime(startTimeObj);

                // Aggiungi le opzioni di orario di fine superiori all'orario di inizio
                while (startTimeObj <= new Date("2000-01-01T23:30")) {
                    var formattedTime = formatTime(startTimeObj);
                    var option = new Option(formattedTime, formattedTime);
                    selectEnd.appendChild(option);
                    startTimeObj.setMinutes(startTimeObj.getMinutes() + 30);
                }

            } else {

                var startTime = new Date();
                startTime.setHours(0, 0, 0, 0);
                var timeOptions = [];
                select.innerHTML = "";

                for (var i = 0; i < 24 * 2; i++) {
                    var formattedTime = formatTime(startTime);
                    var option = new Option(formattedTime, formattedTime);
                    timeOptions.push(option);
                    startTime.setMinutes(startTime.getMinutes() + 30);
                }

                timeOptions.forEach(function(option) {
                    select.appendChild(option);
                });
            }
        }
        $("#time-input option[value='23:30']").remove();

    }

    function formatTime(time) {
        var hours = time.getHours().toString().padStart(2, '0');
        var minutes = time.getMinutes().toString().padStart(2, '0');
        return hours + ':' + minutes;
    }

    document.getElementById('location').addEventListener('input', function() {
        const query = this.value;
        if (query.length > 0) {
            fetch(`http://api.geonames.org/search?name_startsWith=${query}&country=IT&lang=it&cities=cities15000&orderby=population&username=pippone`)
                .then(response => response.text())
                .then(str => (new window.DOMParser()).parseFromString(str, "text/xml"))
                .then(data => {
                    const datalist = document.getElementById('citiesList');
                    datalist.innerHTML = '';

                    const geonames = data.getElementsByTagName('geoname');
                    const addedCities = new Set();

                    for (let i = 0; i < geonames.length; i++) {
                        const cityName = geonames[i].getElementsByTagName('name')[0].textContent;
                        const toponymName = geonames[i].getElementsByTagName('toponymName')[0].textContent;

                        if (!addedCities.has(cityName) && cityName.substring(0, 3) === toponymName.substring(0, 3)) {
                            const option = document.createElement('option');
                            option.value = cityName;

                            datalist.appendChild(option);

                            addedCities.add(cityName);
                        }
                    }
                });
        }
    });
</script>