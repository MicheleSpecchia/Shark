<x-layout>
    @include('partials._navbar')

    <div class="container mt-4">
        <h4 class="title-header mb-2">Cancella una prenotazione o lascia una recensione :)</h4>

        @if(session('message'))
        <div class="notification mb-4">
            {{ session('message') }}
        </div>
        @endif

        <div class="row mt-5">
            @unless($reservations->isEmpty())
            @foreach($reservations as $reservation)
            @if(is_null($reservation->review))
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <div class="card-wrap p-3 custom-card">
                    <h3 class="fs-4 mt-4 fw-bold card-title">Prenotazione #{{ $reservation->id }}</h3>
                    <p><strong>Data Inizio:</strong> {{ $reservation->data_inizio }}</p>
                    <p><strong>Data Fine:</strong> {{ $reservation->data_fine }}</p>
                    <p><strong>Ora Inizio:</strong> {{ $reservation->start_time }}</p>
                    <p><strong>Ora Fine:</strong> {{ $reservation->end_time }}</p>
                    <p><strong>Prezzo:</strong> {{ $reservation->price }}€</p>
                    <p><strong>Veicolo:</strong> {{ $reservation->veicolo }}</p>

                    @if(\Carbon\Carbon::now()->lt($reservation->data_inizio))
                    <button class="btn btn-danger delete-reservation" data-id="{{ $reservation->id }}">Cancella</button>
                    @elseif(\Carbon\Carbon::now()->gt($reservation->data_fine))
                    <a href="{{ route('reviews.create', ['park' => $reservation->park_id, 'reservation' => $reservation->id]) }}" class="btn btn-success">Rate</a>
                    @else
                    <button class="btn btn-secondary" disabled title="Per effettuare una recensione devi attendere la fine del servizio.">Rate</button>
                    @endif
                </div>
            </div>
            @endif
            @endforeach
            @else
            <p class="mb-4">Non hai ancora effettuato nessuna prenotazione.</p>
            @endunless
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Questo codice verrà eseguito quando il DOM è completamente caricato
            $('.delete-reservation').on('click', function(e) {
                // Previeni il comportamento standard del click sul pulsante (per esempio la sottomissione di un form)
                e.preventDefault();

                // Ottieni l'ID della prenotazione dal data attribute del pulsante
                let reservationId = $(this).data('id');

                // Mostra un popup di SweetAlert2 per chiedere conferma all'utente
                Swal.fire({
                    title: 'Sei sicuro?',
                    text: "Vuoi davvero cancellare questa prenotazione?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, cancella',
                    cancelButtonText: 'No, annulla',
                    reverseButtons: true
                }).then((result) => {
                    // Se l'utente conferma la cancellazione
                    if (result.isConfirmed) {
                        // Fai una chiamata AJAX per cancellare la prenotazione
                        $.ajax({
                            url: `/reservations/${reservationId}`,
                            method: 'DELETE',
                            headers: {
                                // Aggiungi il token CSRF alla richiesta AJAX per evitare errori di autenticazione CSRF
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                // Se la cancellazione ha avuto successo
                                if (response.status === 'success') {
                                    // Mostra un popup di conferma
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Fatto!',
                                        text: 'Prenotazione cancellata con successo!',
                                        confirmButtonText: 'OK'
                                    });

                                    // Rimuovi la card della prenotazione dalla pagina
                                    $(`button[data-id="${reservationId}"]`).closest('.col-12').remove();
                                } else {
                                    // Se c'è stato un errore durante la cancellazione
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Errore!',
                                        text: 'Si è verificato un errore durante la cancellazione della prenotazione.',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                // Se c'è stato un errore nella chiamata AJAX
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