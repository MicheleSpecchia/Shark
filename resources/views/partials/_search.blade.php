
<form class="search-bar" action="URL_DOVE_INVIARE_I_DATI" method="get">

    <input type="text" id="location" name="location" placeholder="Luogo" list="citiesList">
    <datalist id="citiesList"></datalist>

    <input type="datetime-local" id="arrival" name="arrival" placeholde>

    <input type="datetime-local" id="end" name="end" placeholder="Data">

    <select id=" vehicle-type" name="vehicle-type">
        <option value="auto">Auto</option>
        <option value="moto">Moto</option>
        <option value="camper">Camper</option>
    </select>

    <button id="search-btn" type="submit"><i class="fa-solid fa-magnifying-glass-location"></i></button> <!-- Lente di ingrandimento-->


    <script>

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



</form>