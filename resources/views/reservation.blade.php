<x-layout>
    @include('partials._navbar')

    <!-- Contenitore principale -->
    <div class="container mt-4">

        <!-- Titolo -->
        <h4 class="title-header mb-2" id="mainTitle">
            @if(count($reservations->where('review', null)) > 0)
            Cancella una prenotazione o lascia una recensione :)
            @else
            Per il momento, non hai prenotazioni da gestire
            @endif
        </h4>

        <!-- Controllo per verificare la presenza di messaggi nella sessione e visualizzarli -->
        @if(session('message'))
        <div class="notification mb-4">
            {{ session('message') }}
        </div>
        @endif

        <div class="row mt-5">

            <!-- Ciclo tra tutte le prenotazioni -->
            @foreach($reservations as $reservation)
            <!-- Controllo se la prenotazione non ha una recensione -->
            @if(is_null($reservation->review))
            <!-- Visualizzazione della prenotazione -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 reservation-card">
                <div class="card-wrap p-3 custom-card">
                    <!-- Dettagli della prenotazione -->
                    <h3 class="fs-4 mt-4 fw-bold card-title">Prenotazione #{{ $reservation->id }}</h3>
                    <p><strong>Data Inizio:</strong> {{ $reservation->data_inizio }}</p>
                    <p><strong>Data Fine:</strong> {{ $reservation->data_fine }}</p>
                    <p><strong>Ora Inizio:</strong> {{ $reservation->start_time }}</p>
                    <p><strong>Ora Fine:</strong> {{ $reservation->end_time }}</p>
                    <p><strong>Prezzo:</strong> {{ $reservation->price }}€</p>
                    <p><strong>Veicolo:</strong> {{ $reservation->veicolo }}</p>

                    <!-- Controllo sulla data della prenotazione per decidere quali azioni mostrare -->
                    @if($reservation->currentTimestamp->lt($reservation->startTimestamp))
                    <button class="btn btn-danger delete-reservation" data-id="{{ $reservation->id }}">Cancella</button>
                    @elseif($reservation->currentTimestamp->gt($reservation->endTimestamp))
                    <a href="{{ route('reviews.create', ['park' => $reservation->park_id, 'reservation' => $reservation->id]) }}" class="btn btn-success">Rate</a>
                    @else
                    <button class="btn btn-secondary" disabled>Rate</button>
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <!-- Script JavaScript per gestire la cancellazione delle prenotazioni -->
    <script>
        $(document).ready(function() {
            // Ascolta l'evento click sui pulsanti per cancellare la prenotazione
            $('.delete-reservation').on('click', function(e) {
                // Previeni l'azione predefinita del pulsante
                e.preventDefault();

                // Ottieni l'ID della prenotazione
                let reservationId = $(this).data('id');

                // Mostra un popup di conferma prima di cancellare la prenotazione
                Swal.fire({
                    title: 'Sei sicuro?',
                    text: "Vuoi davvero cancellare questa prenotazione?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, cancella',
                    cancelButtonText: 'No, annulla',
                    reverseButtons: true
                }).then((result) => {
                    // Se l'utente ha confermato
                    if (result.isConfirmed) {
                        // Fai una richiesta AJAX per cancellare la prenotazione
                        $.ajax({
                            url: `/reservations/${reservationId}`,
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                // Gestisci la risposta di successo
                                if (response.status === 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Fatto!',
                                        text: 'Prenotazione cancellata con successo!',
                                        confirmButtonText: 'OK'
                                    });
                                    // Rimuovi la card della prenotazione
                                    $(`button[data-id="${reservationId}"]`).closest('.reservation-card').remove();

                                    // Se non ci sono più prenotazioni, aggiorna il titolo
                                    if ($('.reservation-card').length === 0) {
                                        $('#mainTitle').text('Per il momento, non hai prenotazioni da gestire');
                                    }

                                } else {
                                    // Gestisci un errore nella risposta
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Errore!',
                                        text: 'Si è verificato un errore durante la cancellazione della prenotazione.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                // Gestisci un errore nella richiesta AJAX
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Errore!',
                                    text: 'Errore nella richiesta AJAX.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
</x-layout>