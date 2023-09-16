<!-- Dichiarazione DOCTYPE per HTML5 -->
<!DOCTYPE html>
<html lang="it">

<head>
    <!-- Specifica la codifica dei caratteri per il documento -->
    <meta charset="UTF-8">
    <!-- Imposta la viewport per renderla responsive su dispositivi mobili -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titolo della pagina -->
    <title>Dashboard Admin</title>
    <!-- Importazione della libreria Chart.js per creare grafici -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body class="dashboard-overview">

    <!-- Barra di navigazione in alto -->
    <div class="navbar">Pannello di Amministrazione Shark</div>

    <!-- Contenitore principale -->
    <div class="container">
        <!-- Barra laterale con link di navigazione -->
        <div class="sidebar">
            <!-- Ogni link punta a una sezione specifica o esegue un'azione -->
            <a href="#overview">Panoramica</a>
            <a href="#parcheggi">Parcheggi</a>
            <a href="#prenotazioni">Prenotazioni</a>
            <a href="#utenti">Utenti</a>
            <a href="#settings">Impostazioni</a>
            <a href="#logout" onclick="performLogout()">Logout</a> <!-- Azione di logout -->
        </div>

        <!-- Contenuto principale -->
        <div class="main-content">
            <!-- Titolo della sezione Panoramica -->
            <h1>Overview e statistiche generali</h1>

            <!-- Contenitore per il grafico delle prenotazioni -->
            <div class="table-container">
                <div class="chart-title">
                    Prenotazioni recenti
                </div>
                <div class="chart-container">
                    <canvas id="reservationsChart"></canvas> <!-- Area per il grafico delle prenotazioni -->
                </div>
            </div>

            <!-- Contenitore per il grafico degli utenti -->
            <div class="table-container">
                <div class="chart-title">
                    Andamento iscritti
                </div>
                <div class="chart-container">
                    <canvas id="usersChart"></canvas> <!-- Area per il grafico degli utenti -->
                </div>
            </div>

            <!-- Contenitore per il grafico dei parcheggi -->
            <div class="table-container">
                <div class="chart-title">
                    Parcheggi aggiunti di recente
                </div>
                <div class="chart-container">
                    <canvas id="parksChart"></canvas> <!-- Area per il grafico dei parcheggi -->
                </div>
            </div>
        </div>
    </div>

    <!-- Elemento nascosto che contiene i dati per i grafici -->
    <div id="chartData" data-reservations="{{ json_encode($reservations_count) }}" data-cumulative-users="{{ json_encode($cumulative_users_count) }}" data-parks="{{ json_encode($parks_daily_count) }}" style="display:none;">
    </div>

    <!-- Script che genera i grafici utilizzando i dati forniti e la libreria Chart.js -->
    <script>
        // Esegue il codice dopo che il documento è completamente caricato
        document.addEventListener('DOMContentLoaded', function() {
            // Raccoglie i dati dai dataset dell'elemento e inizializza le variabili
            const reservationsData = JSON.parse(document.getElementById('chartData').getAttribute('data-reservations'));
            const cumulativeUsersData = JSON.parse(document.getElementById('chartData').getAttribute('data-cumulative-users'));
            const parksData = JSON.parse(document.getElementById('chartData').getAttribute('data-parks'));

            // Funzione per generare un grafico
            const generateChart = (canvasId, data, title, tipo) => {
                new Chart(document.getElementById(canvasId), {
                    type: tipo, // Tipo di grafico
                    data: {
                        labels: ['7 giorni fa', '6 giorni fa', '5 giorni fa', '4 giorni fa', '3 giorni fa', '2 giorni fa', 'Ieri'],
                        datasets: [{
                            label: title,
                            data: Object.values(data), // Valori dell'oggetto come dati
                            backgroundColor: '#1a2a6c',
                            borderColor: '#1a2a6c', // Colore del bordo
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            // Genera i tre grafici con i dati forniti
            generateChart('reservationsChart', reservationsData, 'Prenotazioni', 'bar');
            generateChart('usersChart', cumulativeUsersData, 'Utenti', 'line');
            generateChart('parksChart', parksData, 'Parcheggi', 'line');
        });


        function performLogout() {
            // Crea un elemento di modulo nascosto
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '/logout';

            // Aggiungi un campo nascosto per il token CSRF (assicurati di averlo disponibile)
            var csrfTokenInput = document.createElement('input');
            csrfTokenInput.type = 'hidden';
            csrfTokenInput.name = '_token';
            csrfTokenInput.value = '{{ csrf_token() }}';
            form.appendChild(csrfTokenInput);

            // Aggiungi il modulo al corpo del documento e invialo
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>

</html>