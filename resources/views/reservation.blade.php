<x-layout>
    @include('partials._navbar')

    <div class="content">
        <h2 class="mb-4" style="color: #FFFFFF; font-weight: bold;">Le tue prenotazioni:</h2>

        <!-- Mostra il messaggio di notifica qui -->
        @if(session('message'))
        <div class="notification mb-4">
            {{ session('message') }}
        </div>
        @endif
    </div>

    <div class="container">
        <div class="row mt-5">
            @unless($reservations->isEmpty())
            @foreach($reservations as $reservation)
            @if(is_null($reservation->review)) <!-- Controllo per verificare se la recensione esiste o meno -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <div class="card-wrap p-3" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 15px;">
                    <div class="con-wrap mt-4">
                        <h2 class="fs-4 mt-4 fw-bold" style="color: #1a2a6c;">Prenotazione #{{ $reservation->id }}</h2>
                        <!-- ... (resto del codice della card) ... -->
                        <p><strong>Data Inizio:</strong> {{ $reservation->data_inizio }}</p>
                        <p><strong>Data Fine:</strong> {{ $reservation->data_fine }}</p>
                        <p><strong>Ora Inizio:</strong> {{ $reservation->start_time }}</p>
                        <p><strong>Ora Fine:</strong> {{ $reservation->end_time }}</p>
                        <p><strong>Prezzo:</strong> {{ $reservation->price }}€</p>
                        <p><strong>Veicolo:</strong> {{ $reservation->veicolo }}</p>
                        @if(\Carbon\Carbon::now()->lt($reservation->data_inizio))
                        <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                        @elseif(\Carbon\Carbon::now()->gt($reservation->data_fine))
                        <a href="{{ route('reviews.create', ['park' => $reservation->park_id, 'reservation' => $reservation->id]) }}" class="btn btn-success">Rate</a>
                        @else
                        <!-- Se la data corrente è compresa tra la data di inizio e la data di fine -->
                        <button class="btn btn-secondary" disabled title="Per effettuare una recensione devi attendere la fine del servizio.">Rate</button>
                        @endif
                    </div>
                </div>
            </div>
            @endif <!-- Fine del controllo per la recensione -->
            @endforeach
            @else
            <p class="mb-4">Non hai ancora effettuato nessuna prenotazione.</p>
            @endunless
        </div>
    </div>
</x-layout>