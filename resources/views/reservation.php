@foreach ($reservations as $reservation)
    <p>Data: {{ $reservation->date }}</p>
    <p>Ora di inizio: {{ $reservation->start_time }}</p>
    <p>Ora di fine: {{ $reservation->end_time }}</p>
    <!-- Altri dettagli della prenotazione -->
@endforeach
