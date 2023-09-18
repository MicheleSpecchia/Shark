<x-layout>
    <!-- Inclusione della barra di navigazione -->
    @include('partials._navbar')

    <!-- Contenitore principale -->
    <div class="container mt-4">

        <!-- Titolo principale condizionale -->
        <h4 class="title-header mb-2" id="mainTitle">
            @if(count($reservations->where('review', null)) > 0)
            <!-- Se ci sono prenotazioni senza recensione -->
            Cancella una prenotazione o lascia una recensione :)
            @else
            <!-- Se non ci sono prenotazioni senza recensione -->
            Per il momento, non hai prenotazioni da gestire
            @endif
        </h4>

        <!-- Messaggio di notifica, se presente -->
        @if(session('message'))
        <div class="notification mb-4">
            {{ session('message') }}
        </div>
        @endif

        <!-- Elenco delle prenotazioni senza recensione -->
        <div class="row mt-5">
            <!-- Iterazione attraverso le prenotazioni -->
            @foreach($reservations as $reservation)
            <!-- Verifica se la prenotazione ha una recensione -->
            @if(is_null($reservation->review))
            <div class="col-12 col-md-4 col-lg-3 mb-5 reservation-card">
                <div class="card-wrap p-3 custom-card">
                    <!-- Informazioni sulla prenotazione -->
                    <h3 class="fs-4 mt-4 fw-bold card-title">ID: {{ $reservation->id }}</h3>
                    <p><strong>Data Inizio:</strong> {{ $reservation->data_inizio }}</p>
                    <p><strong>Data Fine:</strong> {{ $reservation->data_fine }}</p>
                    <p><strong>Ora Inizio:</strong> {{ $reservation->start_time }}</p>
                    <p><strong>Ora Fine:</strong> {{ $reservation->end_time }}</p>
                    <p><strong>Prezzo:</strong> {{ $reservation->price }}€</p>
                    <p><strong>Veicolo:</strong> {{ $reservation->veicolo }}</p>
                    <!-- Bottone per cancellare la prenotazione o lasciare una recensione -->
                    @if($reservation->currentTimestamp->lt($reservation->startTimestamp))
                    <!-- Abilitato solo se la data corrente è prima della data di inizio -->
                    <button class="btn btn-danger delete-reservation" data-id="{{ $reservation->id }}">Cancella</button>
                    @elseif($reservation->currentTimestamp->gt($reservation->endTimestamp))
                    <!-- Abilitato solo se la data corrente è dopo la data di fine -->
                    <button class="btn btn-success rate-reservation" data-park-id="{{ $reservation->park_id }}" data-reservation-id="{{ $reservation->id }}">Rate</button>
                    @else
                    <!-- Disabilitato in altre circostanze -->
                    <button class="btn btn-secondary" disabled>Rate</button>
                    @endif
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <!-- Modal per inserire la recensione -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #1a2a6c; color: white;">
                    <h5 class="modal-title" id="reviewModalLabel">Lascia una recensione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="reviewForm" novalidate> <!-- Aggiunto "novalidate" per impedire la validazione del browser -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            <div class="invalid-feedback">Per favore, inserisci un titolo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
                            <div class="invalid-feedback">Per favore, lascia un feedback.</div>
                        </div>
                        <div class="mb-3">
                            <label for="rating">Valutazione</label>
                            <select class="form-control" id="rating" name="rating" required>
                                <option value="">Seleziona una valutazione</option>
                                <option value="1">1 stella</option>
                                <option value="2">2 stelle</option>
                                <option value="3">3 stelle</option>
                                <option value="4">4 stelle</option>
                                <option value="5">5 stelle</option>
                            </select>
                            <div class="invalid-feedback">Per favore, seleziona una valutazione.</div>
                        </div>
                        <input type="hidden" id="parkId" name="parkId" value="">
                        <input type="hidden" id="reservationId" name="reservationId" value="">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <button type="button" class="btn btn-primary" id="submitReview" style="background-color: #1a2a6c; border-color: #1a2a6c;">Invia recensione</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JavaScript per l'interattività -->
    <script>
        $(document).ready(function() {
            // Gestione dell'evento click sui pulsanti "Cancella la prenotazione"
            $('.delete-reservation').on('click', function(e) {
                // Previene l'azione predefinita del pulsante
                e.preventDefault();

                // Ottiene l'ID della prenotazione
                let reservationId = $(this).data('id');

                // Mostra una conferma prima di cancellare la prenotazione
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

            // Mostra il modal quando si fa clic su "Rate"
            $('.rate-reservation').on('click', function() {
                const parkId = $(this).data('park-id');
                const reservationId = $(this).data('reservation-id');

                $('#parkId').val(parkId);
                $('#reservationId').val(reservationId);
                $('#reviewModal').modal('show');
            });

            // Gestione dell'invio della recensione
            $('#submitReview').on('click', function() {
                $.ajax({
                    url: `/parks/${$('#parkId').val()}/reservations/${$('#reservationId').val()}/reviews`,
                    method: 'POST',
                    data: $('#reviewForm').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#reviewModal').modal('hide');
                            Swal.fire({
                                icon: 'success',
                                title: 'Grazie!',
                                text: 'La tua recensione è stata inviata con successo!',
                                confirmButtonText: 'OK'
                            });

                            $(`button[data-reservation-id="${$('#reservationId').val()}"]`).closest('.reservation-card').remove();
                            if ($('.reservation-card').length === 0) {
                                $('#mainTitle').text('Per il momento, non hai prenotazioni da gestire');
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Errore!',
                                text: response.message || 'Si è verificato un errore durante l\'inserimento della recensione.',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Errore!',
                            text: 'Prima di inviare, compila tutti i campi!',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

        });
    </script>
</x-layout>
