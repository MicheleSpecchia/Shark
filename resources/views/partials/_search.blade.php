<div class="row">
    <div class="col-md-6">
        <div class="search-bar">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="combined-input">
                            <input type="text" id="location" name="location" placeholder="Città, Indirizzo.." class="location-input">
                        </div>

                        <div id="app-cover">
                            <input type="checkbox" id="options-view-button">
                            <div id="select-button" class="brd">
                                <div id="selected-value">
                                    <span>Veicolo</span>
                                </div>
                                <div id="chevrons">
                                    <i class="fas fa-chevron-up"></i>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="options">
                                <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="codepen">
                                    <input class="s-c bottom" type="radio" name="platform" value="codepen">
                                    <i class="fab fa-codepen"></i>
                                    <span class="label">CodePen</span>
                                    <span class="opt-val">CodePen</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="dribbble">
                                    <input class="s-c bottom" type="radio" name="platform" value="dribbble">
                                    <i class="fab fa-dribbble"></i>
                                    <span class="label">Dribbble</span>
                                    <span class="opt-val">Dribbble</span>
                                </div>
                                <div id="option-bg"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="search-form">
                            <div class="date-input">
                                <input type="text" id="date-input" name="check-in" placeholder="Data" oninput="showTimeSelect('date-input', 'time-input')">
                                <span class="icon-sb2"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                            </div>
                            <div class="time-input">
                                <select id="time-input" name="time-in" style="display: none;"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="search-form">
                            <div class="date-output">
                                <input type="text" id="date-output" name="check-out" placeholder="Data" oninput="showTimeSelect('date-output', 'time-output')">
                                <span class="icon-sb2"> <i class="fa-solid fa-calendar-day" style="color: #bdbec1;"></i></span>
                            </div>
                            <div class="time-output">
                                <select id="time-output" name="time-out" style="display: none;"></select>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#date-input", {
            dateFormat: "Y-m-d",
            enableTime: false,
        });

        flatpickr("#date-output", {
            dateFormat: "Y-m-d",
            enableTime: false,
        });
    });

    function showTimeSelect(inputElement, selectElement) {
        var select = document.getElementById(selectElement);
        select.style.display = 'block';

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