<div class="row">
    <div class="col-md-6">
        <div class="search-bar">
            <form action="/parks/search" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="search-form">
                            <div class="location">
                                <input type="text" id="location" name="location" placeholder="Città, Indirizzo.." class="location-input">
                                <span class="icon-sb"> <i class="fa fa-map-marker" style="color: #bdbec1;"></i></span>
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
                                <input type="text" id="date-input" name="date-input" placeholder="Data di inizio" readonly>
                                <span class="icon-sb"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                            </div>
                            <div class="time-input">
                                <select id="time-input" name="time-input" style="display: none;"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="search-form">
                            <div class="date-output">
                                <input type="text" id="date-output" name="date-output" placeholder="Data di fine" readonly>
                                <span class="icon-sb"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                            </div>
                            <div class="time-output">
                                <select id="time-output" name="time-output" style="display: none;"></select>
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
                showTimeSelect('date-input', 'time-input');
                $("#date-output").datepicker("option", "minDate", selectedDate);
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
    });

    function showTimeSelect(inputElement, selectElement) {
        var select = document.getElementById(selectElement);
        select.style.display = 'block';
        select.focus();
        var startTime = new Date();
        startTime.setHours(0, 0, 0, 0);
        var timeOptions = [];

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

    function formatTime(time) {
        var hours = time.getHours().toString().padStart(2, '0');
        var minutes = time.getMinutes().toString().padStart(2, '0');
        return hours + ':' + minutes;
    }
</script>