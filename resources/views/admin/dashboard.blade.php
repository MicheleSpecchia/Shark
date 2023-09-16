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
    <!-- PER CHIAMATA AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="dashboard-overview">

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Barra di navigazione in alto -->
    <div class="navbar">Pannello di Amministrazione Shark</div>

    <!-- Contenitore principale -->
    <div class="container">
        <!-- Barra laterale con link di navigazione -->
        <div class="sidebar">
            <!-- Ogni link punta a una sezione specifica o esegue un'azione -->
            <a href="#" onclick="showSection('overview')">Panoramica</a>
            <a href="#" onclick="showSection('parcheggi')">Parcheggi</a>
            <a href="#" onclick="showSection('prenotazioni')">Prenotazioni</a>
            <a href="#" onclick="showSection('utenti')">Utenti</a>
            <a href="#settings">Impostazioni</a>
            <a href="#logout" onclick="performLogout()">Logout</a> <!-- Azione di logout -->
        </div>

        <!-- Contenuto principale -->
        <div class="main-content">
            <div id="section-overview" class="dashboard-section">

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
            <!-- SEZIONE UTENTI -->
            <div id="section-utenti" class="dashboard-section" style="display: none;">
                <h2>Lista Utenti</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cognome</th>
                            <th>Email</th>
                            <th>Azione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr data-id="{{ $user->id }}"> <!-- Aggiunto attributo data-id -->
                            <td>{{ $user->nome }}</td>
                            <td>{{ $user->cognome }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <button class="delete-user-btn">Elimina</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div id="section-prenotazioni" class="dashboard-section" style="display: none;">
                <!-- contenuto delle prenotazioni -->
            </div>
            <!-- SEZIONE PARCHEGGI -->
            <div id="section-parcheggi" class="dashboard-section" style="display: none;">
                <h2>Lista Parcheggi</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Posizione</th>
                            <!-- Aggiungi altre colonne se hai altri campi nel tuo modello Park -->
                            <th>Prezzo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parks as $park)
                        <tr data-id="{{ $park->id }}">
                            <td>{{ $park->id }}</td>
                            <td>{{ $park->location }}</td>
                            <td>{{ $park->price }}$</td>
                            <!-- Aggiungi altre celle se hai altri campi nel tuo modello Park -->
                            <td>
                                <button class="delete-park-btn">Elimina</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
        //Per fare in modo che le sezioni si cambino ma senza aggiornare la pagina
        function showSection(sectionId) {
            // Nascondi tutte le sezioni
            let sections = document.querySelectorAll('.dashboard-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Mostra la sezione selezionata
            document.getElementById('section-' + sectionId).style.display = 'block';
        }

        //eliminazione con chiamat ajax
        $(document).ready(function() {
            $('.delete-user-btn').on('click', function(e) {
                e.preventDefault(); // Evita l'invio del form al click

                let userRow = $(this).closest('tr');
                let userId = userRow.data('id');

                Swal.fire({
                    title: 'Sei sicuro?',
                    text: "Una volta eliminato, non potrai più recuperare questo utente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sì, elimina!',
                    cancelButtonText: 'Annulla'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/users/delete/' + userId,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.success) {
                                    userRow.remove();
                                    Swal.fire(
                                        'Eliminato!',
                                        'L\'utente è stato eliminato con successo.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Errore',
                                        'Si è verificato un errore. Riprova.',
                                        'error'
                                    );
                                }
                            }
                        });
                    }
                });
            });
        });

        //eliminazione parcheggi con chiamata AJAX
        $(document).ready(function() {
            $('.delete-park-btn').on('click', function(e) {
                e.preventDefault();

                let parkRow = $(this).closest('tr');
                let parkId = parkRow.data('id');

                Swal.fire({
                    title: 'Sei sicuro?',
                    text: "Una volta eliminato, non potrai più recuperare questo parcheggio!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sì, elimina!',
                    cancelButtonText: 'Annulla'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/parks/delete/' + parkId,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                if (response.success) {
                                    parkRow.remove();
                                    Swal.fire(
                                        'Eliminato!',
                                        'Il parcheggio è stato eliminato con successo.',
                                        'success'
                                    );
                                } else {
                                    Swal.fire(
                                        'Errore',
                                        'Si è verificato un errore. Riprova.',
                                        'error'
                                    );
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>